@extends('layouts.scaffold')

@section('main')

<h1>Show Teacher</h1>

<p>{{ link_to_route('teachers.index', 'Return to All teachers', null, array('class'=>'btn btn-lg btn-primary')) }}</p>

<table class="table table-striped">
	<thead>
		<tr>
			<th>First_name</th>
				<th>Last_name</th>
				<th>Number</th>
		</tr>
	</thead>

	<tbody>
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
	</tbody>
</table>

@stop
