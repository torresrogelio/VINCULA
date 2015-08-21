@extends('layouts.scaffold')

@section('main')

<h1>Show Agreement_seat</h1>

<p>{{ link_to_route('agreement_seats.index', 'Return to All agreement_seats', null, array('class'=>'btn btn-lg btn-primary')) }}</p>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Agreement_id</th>
				<th>Number_seats</th>
				<th>School_career</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $agreement_seat->agreement_id }}}</td>
					<td>{{{ $agreement_seat->number_seats }}}</td>
					<td>{{{ $agreement_seat->school_career }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('agreement_seats.destroy', $agreement_seat->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('agreement_seats.edit', 'Edit', array($agreement_seat->id), array('class' => 'btn btn-info')) }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
