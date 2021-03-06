@extends('layouts.scaffold')

@section('main')

<div class="row">
    <div class="col-md-10 col-md-offset-2">
        <h1>Create Student</h1>

        @if ($errors->any())
        	<div class="alert alert-danger">
        	    <ul>
                    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
                </ul>
        	</div>
        @endif
    </div>
</div>

{{ Form::open(array('route' => 'students.store', 'class' => 'form-horizontal')) }}

        <div class="form-group">
            {{ Form::label('first_name', 'First_name:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('first_name', Input::old('first_name'), array('class'=>'form-control', 'placeholder'=>'First Name')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('last_name', 'Last_name:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('last_name', Input::old('last_name'), array('class'=>'form-control', 'placeholder'=>'Last Name')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('number', 'Number:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::input('number', 'number', Input::old('number'), array('class'=>'form-control', 'placeholder'=>'Credential Number')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('start_period', 'Start_period:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::input('date','start_period', null, array('class'=>'form-control', 'placeholder'=>'Start Period')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('graduation_period', 'Graduation_period:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::input('date', 'graduation_period', null, array('class'=>'form-control', 'placeholder'=>'Graduation Period')) }}
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


