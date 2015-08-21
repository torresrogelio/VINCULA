@extends('layouts.scaffold')

@section('main')

<div class="row">
    <div class="col-md-10 col-md-offset-2">
        <h1>Edit Work_offer</h1>

        @if ($errors->any())
        	<div class="alert alert-danger">
        	    <ul>
                    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
                </ul>
        	</div>
        @endif
    </div>
</div>

{{ Form::model($work_offer, array('class' => 'form-horizontal', 'method' => 'PATCH', 'route' => array('work_offers.update', $work_offer->id))) }}

        <div class="form-group">
            {{ Form::label('company_id', 'Company_id:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::input('number', 'company_id', Input::old('company_id'), array('class'=>'form-control')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('title', 'Title:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('title', Input::old('title'), array('class'=>'form-control', 'placeholder'=>'Title')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('contact_email', 'Contact_email:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('contact_email', Input::old('contact_email'), array('class'=>'form-control', 'placeholder'=>'Contact_email')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('job_position', 'Job_position:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('job_position', Input::old('job_position'), array('class'=>'form-control', 'placeholder'=>'Job_position')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('job_description', 'Job_description:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('job_description', Input::old('job_description'), array('class'=>'form-control', 'placeholder'=>'Job_description')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('job_salary', 'Job_salary:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('job_salary', Input::old('job_salary'), array('class'=>'form-control', 'placeholder'=>'Job_salary')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('job_location', 'Job_location:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('job_location', Input::old('job_location'), array('class'=>'form-control', 'placeholder'=>'Job_location')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('workday', 'Workday:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('workday', Input::old('workday'), array('class'=>'form-control', 'placeholder'=>'Workday')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('available', 'Available:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('available', Input::old('available'), array('class'=>'form-control', 'placeholder'=>'Available')) }}
            </div>
        </div>


<div class="form-group">
    <label class="col-sm-2 control-label">&nbsp;</label>
    <div class="col-sm-10">
      {{ Form::submit('Update', array('class' => 'btn btn-lg btn-primary')) }}
      {{ link_to_route('work_offers.show', 'Cancel', $work_offer->id, array('class' => 'btn btn-lg btn-default')) }}
    </div>
</div>

{{ Form::close() }}

@stop