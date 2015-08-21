@extends('layouts.scaffold')

@section('main')

<div class="row">
    <div class="col-md-10 col-md-offset-2">
        <h1>Create Survey_manager</h1>

        @if ($errors->any())
        	<div class="alert alert-danger">
        	    <ul>
                    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
                </ul>
        	</div>
        @endif
    </div>
</div>

{{ Form::open(array('route' => 'survey_managers.store', 'class' => 'form-horizontal')) }}

        <div class="form-group">
            {{ Form::label('manager_email', 'Manager_email:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('manager_email', Input::old('manager_email'), array('class'=>'form-control', 'placeholder'=>'Manager_email')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('survey', 'Survey:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::textarea('survey', Input::old('survey'), array('class'=>'form-control', 'placeholder'=>'Survey')) }}
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


