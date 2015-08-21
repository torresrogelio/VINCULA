@extends('layouts.scaffold')

@section('main')

<h1>Show Survey_student</h1>

<p>{{ link_to_route('survey_students.index', 'Return to All survey_students', null, array('class'=>'btn btn-lg btn-primary')) }}</p>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Student_id</th>
				<th>Survey</th>
		</tr>
	</thead>

	<tbody>
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
	</tbody>
</table>

@stop
