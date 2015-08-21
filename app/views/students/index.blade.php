@extends('layouts.scaffold')

@section('main')

<h1>All Students</h1>

<p>{{ link_to_route('students.create', 'Add New Student', null, array('class' => 'btn btn-lg btn-success')) }}</p>

@if ($students->count())
	<table class="table table-striped">
		<thead>
			<tr>
				<th>First_name</th>
				<th>Last_name</th>
				<th>Number</th>
				<th>Start_period</th>
				<th>Graduation_period</th>
				<th>&nbsp;</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($students as $student)
				<tr>
					<td>{{{ $student->first_name }}}</td>
					<td>{{{ $student->last_name }}}</td>
					<td>{{{ $student->number }}}</td>
					<td>{{{ $student->start_period }}}</td>
					<td>{{{ $student->graduation_period }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('students.destroy', $student->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('students.edit', 'Edit', array($student->id), array('class' => 'btn btn-info')) }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no students
@endif

@stop
