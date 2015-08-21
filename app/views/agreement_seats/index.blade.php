@extends('layouts.scaffold')

@section('main')

<h1>All Agreement_seats</h1>

<p>{{ link_to_route('agreement_seats.create', 'Add New Agreement_seat', null, array('class' => 'btn btn-lg btn-success')) }}</p>

@if ($agreement_seats->count())
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Agreement_id</th>
				<th>Number_seats</th>
				<th>School_career</th>
				<th>&nbsp;</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($agreement_seats as $agreement_seat)
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
			@endforeach
		</tbody>
	</table>
@else
	There are no agreement_seats
@endif

@stop
