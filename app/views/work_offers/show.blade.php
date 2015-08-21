@extends('layouts.scaffold')

@section('main')

<h1>Show Work_offer</h1>

<p>{{ link_to_route('work_offers.index', 'Return to All work_offers', null, array('class'=>'btn btn-lg btn-primary')) }}</p>

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
		</tr>
	</thead>

	<tbody>
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
	</tbody>
</table>

@stop
