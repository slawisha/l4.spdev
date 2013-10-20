@extends('layouts.default')

@section('content')
	<h3>Log in</h3>
	{{ Form::open(array('method'=>'post','route'=>'authenticate')) }}
	<div class="form-group">
	{{ Form::label('email', 'Email Address') }}
	{{ Form::text('email')}}
	</div>
	<div class="form-group">
	{{ Form::label('password', 'Password') }}
	{{ Form::text('password')}}
	</div>
	<div class="form-group">
	{{ Form::submit('Submit', array('class'=>'btn btn-primary submit'))}}
	</div>

	{{ Form::close() }}
@stop