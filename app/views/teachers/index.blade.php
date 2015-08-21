@extends('layouts.scaffold')

@section('main')

<h1>All Teachers</h1>

<p>{{ link_to_route('teachers.create', 'Add New Teacher', null, array('class' => 'btn btn-lg btn-success')) }}</p>

@if ($teachers->count())
	<table class="table table-striped">
		<thead>
			<tr>
				<th>First_name</th>
				<th>Last_name</th>
				<th>Number</th>
				<th>&nbsp;</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($teachers as $teacher)
				<tr>
					<td>{{{ $teacher->first_name }}}</td>
					<td>{{{ $teacher->last_name }}}</td>
					<td>{{{ $teacher->number }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('teachers.destroy', $teacher->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('teachers.edit', 'Edit', array($teacher->id), array('class' => 'btn btn-info')) }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no teachers
@endif

@stop
