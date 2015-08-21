@extends('layouts.scaffold')

@section('main')

<h1>Show Agreement</h1>

<p>{{ link_to_route('agreements.index', 'Return to All agreements', null, array('class'=>'btn btn-lg btn-primary')) }}</p>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Company_id</th>
				<th>Type</th>
				<th>Start_date</th>
				<th>End_date</th>
				<th>Status</th>
		</tr>
	</thead>

	<tbody>
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
	</tbody>
</table>

@stop
