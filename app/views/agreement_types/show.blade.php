@extends('layouts.scaffold')

@section('main')

<h1>Show Agreement_type</h1>

<p>{{ link_to_route('agreement_types.index', 'Return to All agreement_types', null, array('class'=>'btn btn-lg btn-primary')) }}</p>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Type</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $agreement_type->type }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('agreement_types.destroy', $agreement_type->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('agreement_types.edit', 'Edit', array($agreement_type->id), array('class' => 'btn btn-info')) }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
