@extends('layouts.default')
@section('content')
	<h2>Create project</h2>
	{{ Form::open(array('method'=>'post', 'route'=>'projects.store', 'files'=>true, 'role'=>'form' )) }}
	<div class="form-group">
	{{ Form::label('name','Project Name') }}
	{{ Form::text('name') }}
	<span class="alert-danger">{{ $errors->first('name') }}</span>
	</div>
	<div class="form-group">
	{{ Form::label('description','Project Desription') }}
	{{ Form::textarea('description') }}
	<span class="alert-danger">{{ $errors->first('description') }}</span>
	</div>
	<div class="form-group">
	{{ Form::label('url','Project Url') }}
	{{ Form::text('url') }}
	<span class="alert-danger">{{ $errors->first('url') }}</span>
	</div>
	<div class="form-group">
	{{ Form::label('image','Project Thumbnail Image') }}
	{{ Form::file('image') }}
	<span class="alert-danger">{{ $errors->first('image') }}</span>
	</div>
	<div class="form-group">
	{{ Form::submit('Submit', array('class'=>'btn btn-primary submit'))}}
	</div>
	{{ Form::close()}}
	
@stop