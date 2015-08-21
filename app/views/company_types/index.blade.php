@extends('layouts.scaffold')

@section('main')

<h1>All Company_types</h1>

<p>{{ link_to_route('company_types.create', 'Add New Company_type', null, array('class' => 'btn btn-lg btn-success')) }}</p>

@if ($company_types->count())
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Type</th>
				<th>&nbsp;</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($company_types as $company_type)
				<tr>
					<td>{{{ $company_type->type }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('company_types.destroy', $company_type->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('company_types.edit', 'Edit', array($company_type->id), array('class' => 'btn btn-info')) }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no company_types
@endif

@stop
