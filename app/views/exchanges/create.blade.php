@extends('layouts.scaffold')

@section('main')

<div class="row">
    <div class="col-md-10 col-md-offset-2">
        <h1>Create Exchange</h1>

        @if ($errors->any())
        	<div class="alert alert-danger">
        	    <ul>
                    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
                </ul>
        	</div>
        @endif
    </div>
</div>

{{ Form::open(array('route' => 'exchanges.store', 'class' => 'form-horizontal')) }}

        <div class="form-group">
            {{ Form::label('student_id', 'Student_id:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::input('number', 'student_id', Input::old('student_id'), array('class'=>'form-control')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('agreement_id', 'Agreement_id:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::input('number', 'agreement_id', Input::old('agreement_id'), array('class'=>'form-control')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('departure_date', 'Departure_date:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('departure_date', Input::old('departure_date'), array('class'=>'form-control', 'placeholder'=>'Departure_date')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('arrival_date', 'Arrival_date:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('arrival_date', Input::old('arrival_date'), array('class'=>'form-control', 'placeholder'=>'Arrival_date')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('is_materialized', 'Is_materialized:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('is_materialized', Input::old('is_materialized'), array('class'=>'form-control', 'placeholder'=>'Is_materialized')) }}
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


