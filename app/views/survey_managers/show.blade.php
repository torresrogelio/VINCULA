@extends('layouts.scaffold')

@section('main')

<h1>Show Survey_manager</h1>

<p>{{ link_to_route('survey_managers.index', 'Return to All survey_managers', null, array('class'=>'btn btn-lg btn-primary')) }}</p>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Manager_email</th>
				<th>Survey</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $survey_manager->manager_email }}}</td>
					<td>{{{ $survey_manager->survey }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('survey_managers.destroy', $survey_manager->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('survey_managers.edit', 'Edit', array($survey_manager->id), array('class' => 'btn btn-info')) }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
