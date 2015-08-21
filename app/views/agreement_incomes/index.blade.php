@extends('layouts.scaffold')

@section('main')

<h1>All Agreement_incomes</h1>

<p>{{ link_to_route('agreement_incomes.create', 'Add New Agreement_income', null, array('class' => 'btn btn-lg btn-success')) }}</p>

@if ($agreement_incomes->count())
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Amount</th>
				<th>Teacher_id</th>
				<th>Agreement_id</th>
				<th>&nbsp;</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($agreement_incomes as $agreement_income)
				<tr>
					<td>{{{ $agreement_income->amount }}}</td>
					<td>{{{ $agreement_income->teacher_id }}}</td>
					<td>{{{ $agreement_income->agreement_id }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('agreement_incomes.destroy', $agreement_income->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('agreement_incomes.edit', 'Edit', array($agreement_income->id), array('class' => 'btn btn-info')) }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no agreement_incomes
@endif

@stop
