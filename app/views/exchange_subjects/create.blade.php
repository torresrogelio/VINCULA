@extends('layouts.scaffold')

@section('main')

<div class="row">
    <div class="col-md-10 col-md-offset-2">
        <h1>Create Exchange_subject</h1>

        @if ($errors->any())
        	<div class="alert alert-danger">
        	    <ul>
                    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
                </ul>
        	</div>
        @endif
    </div>
</div>

{{ Form::open(array('route' => 'exchange_subjects.store', 'class' => 'form-horizontal')) }}

        <div class="form-group">
            {{ Form::label('exchange_id', 'Exchange_id:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::input('number', 'exchange_id', Input::old('exchange_id'), array('class'=>'form-control')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('foreign_subject', 'Foreign_subject:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('foreign_subject', Input::old('foreign_subject'), array('class'=>'form-control', 'placeholder'=>'Foreign_subject')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('local_subject', 'Local_subject:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('local_subject', Input::old('local_subject'), array('class'=>'form-control', 'placeholder'=>'Local_subject')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('grade', 'Grade:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::input('number', 'grade', Input::old('grade'), array('class'=>'form-control')) }}
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


