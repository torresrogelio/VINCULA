@extends('layouts.scaffold')

@section('main')

<h1>Show Student</h1>

<p>{{ link_to_route('students.index', 'Return to All students', null, array('class'=>'btn btn-lg btn-primary')) }}</p>

<table class="table table-striped">
	<thead>
		<tr>
			<th>First_name</th>
				<th>Last_name</th>
				<th>Number</th>
				<th>Start_period</th>
				<th>Graduation_period</th>
		</tr>
	</thead>

	<tbody>
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
	</tbody>
</table>

@stop
