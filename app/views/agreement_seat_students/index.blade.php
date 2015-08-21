@extends('layouts.scaffold')

@section('main')

<h1>All Agreement_seat_students</h1>

<p>{{ link_to_route('agreement_seat_students.create', 'Add New Agreement_seat_student', null, array('class' => 'btn btn-lg btn-success')) }}</p>

@if ($agreement_seat_students->count())
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Agreement_seats_id</th>
				<th>Student_id</th>
				<th>Start_date</th>
				<th>Completion_date</th>
				<th>&nbsp;</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($agreement_seat_students as $agreement_seat_student)
				<tr>
					<td>{{{ $agreement_seat_student->agreement_seats_id }}}</td>
					<td>{{{ $agreement_seat_student->student_id }}}</td>
					<td>{{{ $agreement_seat_student->start_date }}}</td>
					<td>{{{ $agreement_seat_student->completion_date }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('agreement_seat_students.destroy', $agreement_seat_student->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('agreement_seat_students.edit', 'Edit', array($agreement_seat_student->id), array('class' => 'btn btn-info')) }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no agreement_seat_students
@endif

@stop
