@extends('admin.master')

@section('page_title', 'Update Client')
@section('subtitle', $client->name)

@section('content')
	<div class="row">
		<div class="col-md-12">
			{{ Form::Model( $client, [ 'method' => 'PUT', 'route' => ['admin.client.update', 'client' => $client->slug ] ]) }}
				<div class="form-group">
					<label>Client Name</label>
					<!-- <input class="form-control" type="text" name="name"> -->
					{{ Form::text('name', null, [ 'class' => 'form-control', 'placeholder' => 'Acme Inc' ]) }}
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary">Update</button>
				</div>
			{{ Form::close() }}
		</div>
	</div>

	@if( $client->images->count() )
		<div class="row">
			<div class="col-md-12">
				<h1>Slides</h1>
			</div>
		</div>
			@foreach( $client->images as $i => $image )
				@if( $i % 4 == 0 )
					<div class="row">
				@endif 
					<div class="col-xs-6 col-md-3">
			    		<div class="thumbnail">

			                <div class="caption">
			                    <h4>Options</h4>
			                    <p><a href="{{ URL::route('admin.client.image.delete', ['slug' => $client->slug, 'image' => $image->id ])}}" class="label label-danger"  rel="tooltip" title="Delete">Delete</a>
			                </div>
			  				<img src="{{ asset($image->filepath) }}">
			    		</div>
					</div>
		    	@if( $i % 4 == 3 )
		    		</div>
		    	@endif
			@endforeach
		</div>
	@endif


	<div class="row">
		<div class="col-md-12">
			<h1>Upload Slides</h1>
		</div>
	</div>

  	{{ Form::open([
		'route' => ['admin.client.image', $client->slug],
		'class' => 'dropzone',
		'id' => 'my-awesome-dropzone'
	])}}

	{{ Form::close() }}
@stop

@section('footer')
<script>
	$( document ).ready(function() {

		// Prepare the image tooltips
	    $("[rel='tooltip']").tooltip();    
	 
	    $('.thumbnail').hover(
	        function(){
	            $(this).find('.caption').slideDown(250); //.fadeIn(250)
	        },
	        function(){
	            $(this).find('.caption').slideUp(250); //.fadeOut(205)
	        }
	    ); 

	    // If the delete button is clicked on any item, then process the deletion of the image
	    $('.thumbnail .caption .label-danger').click(function(e){
	    	e.preventDefault();
	    	var element = $(this);
	    	var container = $(this).closest('.thumbnail').parent();

	    	$.ajax({
	    		type: 'DELETE',
	    		url: $(this).attr('href'),
	    		dataType: 'json',
	    		beforeSend: function(){
	    			$(element).closest('.caption').html('<br><i class="fa fa-spinner fa-spin fa-5x"></i>');
	    			$(element).find('.caption').show();
	    		},
	    		success: function(res){
	    			$(container).animate({ width: '0px' }, 500, function(){
	    				$(container).remove();
	    			});
	    		}
	    	});

	    	return false;
	    });
	});
	</script>
@stop