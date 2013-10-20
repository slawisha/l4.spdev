@extends('layouts.default')
@section('content')
	<h2>Edit project</h2>
	{{--dd($project)--}}
	{{ Form::open(array('method'=>'patch', 'route'=>array('projects.update', $project->id), 'files'=>true, 'role'=>'form' )) }}
	<div class="form-group">
	{{ Form::label('name','Project Name') }}
	{{ Form::text('name', $project->name) }}
	<span class="alert-danger">{{ $errors->first('name') }}</span>
	</div>
	<div class="form-group">
	{{ Form::label('description','Project Desription') }}
	{{ Form::textarea('description', $project->description) }}
	<span class="alert-danger">{{ $errors->first('description') }}</span>
	</div>
	<div class="form-group">
	{{ Form::label('url','Project Url') }}
	{{ Form::text('url', $project->url) }}
	<span class="alert-danger">{{ $errors->first('url') }}</span>
	</div>
	<div class="form-group">
	{{ Form::label('image','Project Thumbnail Image') }}
	<img src="{{ URL::asset($project->image)}}" class="img-thumbnail" width="100" height="80"/>
	{{ Form::file('image') }}
	<span class="alert-danger">{{ $errors->first('image') }}</span>
	</div>
	<div class="form-gropu">
	{{ Form::submit('Submit', array('class'=>'btn btn-primary submit'))}}
	{{ Form::close()}}
	</div>
@stop