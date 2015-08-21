@extends('layouts.scaffold')

@section('main')

<h1>Show Company</h1>

<p>{{ link_to_route('companies.index', 'Return to All companies', null, array('class'=>'btn btn-lg btn-primary')) }}</p>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Name</th>
				<th>RFC</th>
				<th>Type</th>
				<th>Street</th>
				<th>Exterior_number</th>
				<th>Interior_number</th>
				<th>Postal_code</th>
				<th>City</th>
				<th>Satate</th>
				<th>Country</th>
				<th>Is_internal_company</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $company->name }}}</td>
					<td>{{{ $company->RFC }}}</td>
					<td>{{{ $company->type }}}</td>
					<td>{{{ $company->street }}}</td>
					<td>{{{ $company->exterior_number }}}</td>
					<td>{{{ $company->interior_number }}}</td>
					<td>{{{ $company->postal_code }}}</td>
					<td>{{{ $company->city }}}</td>
					<td>{{{ $company->satate }}}</td>
					<td>{{{ $company->country }}}</td>
					<td>{{{ $company->is_internal_company }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('companies.destroy', $company->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('companies.edit', 'Edit', array($company->id), array('class' => 'btn btn-info')) }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
