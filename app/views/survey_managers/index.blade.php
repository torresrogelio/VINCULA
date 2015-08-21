@extends('layouts.scaffold')

@section('main')

<h1>All Survey_managers</h1>

<p>{{ link_to_route('survey_managers.create', 'Add New Survey_manager', null, array('class' => 'btn btn-lg btn-success')) }}</p>

@if ($survey_managers->count())
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Manager_email</th>
				<th>Survey</th>
				<th>&nbsp;</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($survey_managers as $survey_manager)
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
			@endforeach
		</tbody>
	</table>
@else
	There are no survey_managers
@endif

@stop
