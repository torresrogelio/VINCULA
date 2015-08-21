@extends('layouts.scaffold')

@section('main')

<h1>Show Current_graduate_student_job</h1>

<p>{{ link_to_route('current_graduate_student_jobs.index', 'Return to All current_graduate_student_jobs', null, array('class'=>'btn btn-lg btn-primary')) }}</p>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Company_id</th>
				<th>Job_title</th>
				<th>Manager_email</th>
				<th>Start_date</th>
				<th>Completion_date</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $current_graduate_student_job->company_id }}}</td>
					<td>{{{ $current_graduate_student_job->job_title }}}</td>
					<td>{{{ $current_graduate_student_job->manager_email }}}</td>
					<td>{{{ $current_graduate_student_job->start_date }}}</td>
					<td>{{{ $current_graduate_student_job->completion_date }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('current_graduate_student_jobs.destroy', $current_graduate_student_job->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('current_graduate_student_jobs.edit', 'Edit', array($current_graduate_student_job->id), array('class' => 'btn btn-info')) }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
