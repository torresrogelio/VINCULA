@extends('layouts.scaffold')

@section('main')

<h1>Show Exchange_subject</h1>

<p>{{ link_to_route('exchange_subjects.index', 'Return to All exchange_subjects', null, array('class'=>'btn btn-lg btn-primary')) }}</p>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Exchange_id</th>
				<th>Foreign_subject</th>
				<th>Local_subject</th>
				<th>Grade</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $exchange_subject->exchange_id }}}</td>
					<td>{{{ $exchange_subject->foreign_subject }}}</td>
					<td>{{{ $exchange_subject->local_subject }}}</td>
					<td>{{{ $exchange_subject->grade }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('exchange_subjects.destroy', $exchange_subject->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('exchange_subjects.edit', 'Edit', array($exchange_subject->id), array('class' => 'btn btn-info')) }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
