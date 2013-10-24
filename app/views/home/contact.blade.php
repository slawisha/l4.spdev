@extends('layouts.default')

@section('content')
	<h3 class="col-md-offset-2 clearfix">Contact me</h3>
	{{ Form::open(array('method'=>'post','route'=>'sendmail', 'class'=>'clearfix')) }}
	<div class="form-group col-md-offset-2">
	{{ Form::label('name', 'Name') }}
	{{ Form::text('name')}}
	<span class="alert-danger">{{ $errors->first('name') }}</span>
	</div>
	<div class="form-group col-md-offset-2">
	{{ Form::label('email', 'Email Address') }}
	{{ Form::text('email')}}
	<span class="alert-danger">{{ $errors->first('email') }}</span>
	</div>
	<div class="form-group col-md-offset-2">
	{{ Form::label('subject', 'Subject') }}
	{{ Form::text('subject')}}
	<span class="alert-danger">{{ $errors->first('subject') }}</span>
	</div>
	<div class="form-group col-md-offset-2">
	{{ Form::label('message','Message') }}
	{{ Form::textarea('message') }}
	<span class="alert-danger">{{ $errors->first('message') }}</span>
	</div>
	<div class="form-group col-md-offset-2">
	{{ Form::submit('Submit', array('class'=>'btn btn-primary submit'))}}
	</div>

	{{ Form::close() }}
@stop
