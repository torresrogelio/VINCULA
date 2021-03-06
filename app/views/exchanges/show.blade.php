@extends('layouts.scaffold')

@section('main')

<h1>Show Exchange</h1>

<p>{{ link_to_route('exchanges.index', 'Return to All exchanges', null, array('class'=>'btn btn-lg btn-primary')) }}</p>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Student_id</th>
				<th>Agreement_id</th>
				<th>Departure_date</th>
				<th>Arrival_date</th>
				<th>Is_materialized</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $exchange->student_id }}}</td>
					<td>{{{ $exchange->agreement_id }}}</td>
					<td>{{{ $exchange->departure_date }}}</td>
					<td>{{{ $exchange->arrival_date }}}</td>
					<td>{{{ $exchange->is_materialized }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('exchanges.destroy', $exchange->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('exchanges.edit', 'Edit', array($exchange->id), array('class' => 'btn btn-info')) }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
