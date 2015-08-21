@extends('layouts.scaffold')

@section('main')

<h1>Show Work_offer_student</h1>

<p>{{ link_to_route('work_offer_students.index', 'Return to All work_offer_students', null, array('class'=>'btn btn-lg btn-primary')) }}</p>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Work_offer_id</th>
				<th>Student_id</th>
				<th>Start_date</th>
				<th>Completion_date</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $work_offer_student->work_offer_id }}}</td>
					<td>{{{ $work_offer_student->student_id }}}</td>
					<td>{{{ $work_offer_student->start_date }}}</td>
					<td>{{{ $work_offer_student->completion_date }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('work_offer_students.destroy', $work_offer_student->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('work_offer_students.edit', 'Edit', array($work_offer_student->id), array('class' => 'btn btn-info')) }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
