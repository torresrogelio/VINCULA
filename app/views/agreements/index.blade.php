@extends('layouts.scaffold')

@section('main')

<h1>All Agreements</h1>

<p>{{ link_to_route('agreements.create', 'Add New Agreement', null, array('class' => 'btn btn-lg btn-success')) }}</p>

@if ($agreements->count())
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Company_id</th>
				<th>Type</th>
				<th>Start_date</th>
				<th>End_date</th>
				<th>Status</th>
				<th>&nbsp;</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($agreements as $agreement)
				<tr>
					<td>{{{ $agreement->company_id }}}</td>
					<td>{{{ $agreement->type }}}</td>
					<td>{{{ $agreement->start_date }}}</td>
					<td>{{{ $agreement->end_date }}}</td>
					<td>{{{ $agreement->status }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('agreements.destroy', $agreement->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('agreements.edit', 'Edit', array($agreement->id), array('class' => 'btn btn-info')) }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no agreements
@endif

@stop
