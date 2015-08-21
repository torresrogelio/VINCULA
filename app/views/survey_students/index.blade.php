@extends('layouts.scaffold')

@section('main')

<h1>All Survey_students</h1>

<p>{{ link_to_route('survey_students.create', 'Add New Survey_student', null, array('class' => 'btn btn-lg btn-success')) }}</p>

@if ($survey_students->count())
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Student_id</th>
				<th>Survey</th>
				<th>&nbsp;</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($survey_students as $survey_student)
				<tr>
					<td>{{{ $survey_student->student_id }}}</td>
					<td>{{{ $survey_student->survey }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('survey_students.destroy', $survey_student->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('survey_students.edit', 'Edit', array($survey_student->id), array('class' => 'btn btn-info')) }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no survey_students
@endif

@stop
