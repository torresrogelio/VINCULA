@extends('layouts.scaffold')

@section('main')

<div class="row">
    <div class="col-md-10 col-md-offset-2">
        <h1>Create Current_graduate_student_job</h1>

        @if ($errors->any())
        	<div class="alert alert-danger">
        	    <ul>
                    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
                </ul>
        	</div>
        @endif
    </div>
</div>

{{ Form::open(array('route' => 'current_graduate_student_jobs.store', 'class' => 'form-horizontal')) }}

        <div class="form-group">
            {{ Form::label('company_id', 'Company_id:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::input('number', 'company_id', Input::old('company_id'), array('class'=>'form-control')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('job_title', 'Job_title:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('job_title', Input::old('job_title'), array('class'=>'form-control', 'placeholder'=>'Job_title')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('manager_email', 'Manager_email:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('manager_email', Input::old('manager_email'), array('class'=>'form-control', 'placeholder'=>'Manager_email')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('start_date', 'Start_date:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('start_date', Input::old('start_date'), array('class'=>'form-control', 'placeholder'=>'Start_date')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('completion_date', 'Completion_date:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('completion_date', Input::old('completion_date'), array('class'=>'form-control', 'placeholder'=>'Completion_date')) }}
            </div>
        </div>


<div class="form-group">
    <label class="col-sm-2 control-label">&nbsp;</label>
    <div class="col-sm-10">
      {{ Form::submit('Create', array('class' => 'btn btn-lg btn-primary')) }}
    </div>
</div>

{{ Form::close() }}

@stop


