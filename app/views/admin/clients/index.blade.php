@extends('admin.master')

@section('page_title', 'Client List')
@section('content')
	<div class="col-md-12">
		<a href="{{ URL::route('admin.client.create') }}" class="btn btn-primary pull-right">Create New Client</a>
	</div>

	<div class="col-md-12">
		<div class="table-responsive">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Client Name</th>
						<th># of Slides</th>
						<th>Options</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($clients as $client)
						<tr>
							@if( $client->id != $active->value )
								<td>{{ link_to_route('admin.client.show', $client->name, [$client->slug]) }}</td>
							@else
								<td><strong>{{ link_to_route('admin.client.show', $client->name, [$client->slug]) }}</strong></td>
							@endif

							<td>{{ $client->images()->count() }}</td>
							<td class="text-center">

								<a class='btn btn-info btn-xs' href="{{ URL::route('admin.client.edit', [ $client->slug ]) }}">
									<span class="glyphicon glyphicon-edit"></span> Edit
								</a>

								@if( $client->id != $active->value )
									<a href="{{ URL::route('admin.client.activate', [$client->slug]) }}" class="btn btn-success btn-xs">
										<i class="fa fa-check"></i> Make Active
									</a>
								@endif

								<!-- <a class="btn btn-danger btn-xs" href="{{ URL::route('admin.client.destroy', [ $client->slug ]) }}">
									<span class="glyphicon glyphicon-remove"></span> Delete
								</a> -->
							</td>
						</tr>
					@endforeach
					</tbody>
			</table>
		</div>
	</div>

	

@stop