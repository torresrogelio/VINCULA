@extends('layouts.scaffold')

@section('main')

<h1>All Agreement_types</h1>

<p>{{ link_to_route('agreement_types.create', 'Add New Agreement_type', null, array('class' => 'btn btn-lg btn-success')) }}</p>

@if ($agreement_types->count())
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Type</th>
				<th>&nbsp;</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($agreement_types as $agreement_type)
				<tr>
					<td>{{{ $agreement_type->type }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('agreement_types.destroy', $agreement_type->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('agreement_types.edit', 'Edit', array($agreement_type->id), array('class' => 'btn btn-info')) }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no agreement_types
@endif

@stop
