@extends('layouts.scaffold')

@section('main')

<h1>All Work_offers</h1>

<p>{{ link_to_route('work_offers.create', 'Add New Work_offer', null, array('class' => 'btn btn-lg btn-success')) }}</p>

@if ($work_offers->count())
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Company_id</th>
				<th>Title</th>
				<th>Contact_email</th>
				<th>Job_position</th>
				<th>Job_description</th>
				<th>Job_salary</th>
				<th>Job_location</th>
				<th>Workday</th>
				<th>Available</th>
				<th>&nbsp;</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($work_offers as $work_offer)
				<tr>
					<td>{{{ $work_offer->company_id }}}</td>
					<td>{{{ $work_offer->title }}}</td>
					<td>{{{ $work_offer->contact_email }}}</td>
					<td>{{{ $work_offer->job_position }}}</td>
					<td>{{{ $work_offer->job_description }}}</td>
					<td>{{{ $work_offer->job_salary }}}</td>
					<td>{{{ $work_offer->job_location }}}</td>
					<td>{{{ $work_offer->workday }}}</td>
					<td>{{{ $work_offer->available }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('work_offers.destroy', $work_offer->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('work_offers.edit', 'Edit', array($work_offer->id), array('class' => 'btn btn-info')) }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no work_offers
@endif

@stop
