@extends('layouts.scaffold')

@section('main')

<h1>Show Company_type</h1>

<p>{{ link_to_route('company_types.index', 'Return to All company_types', null, array('class'=>'btn btn-lg btn-primary')) }}</p>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Type</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $company_type->type }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('company_types.destroy', $company_type->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('company_types.edit', 'Edit', array($company_type->id), array('class' => 'btn btn-info')) }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
