@extends('admin.master')

@section('page_title', 'Create Client')

@section('content')
	<div class="row">
		<div class="col-md-12">
			{{ Form::open([ 'route' => 'admin.client.store' ]) }}
				<div class="form-group">
					<label>Client Name</label>
					<!-- <input class="form-control" type="text" name="name"> -->
					{{ Form::text('name', null, [ 'class' => 'form-control', 'placeholder' => 'Acme Inc' ]) }}
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary">Create</button>
				</div>
			{{ Form::close() }}
		</div>
	</div>
@stop