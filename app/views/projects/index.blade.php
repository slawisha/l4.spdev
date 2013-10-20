@extends('layouts.default')
@section('content')
	<h2>Projects</h2>
	{{ HTML::linkRoute('projects.create','Add new project')}}
	<table class="table-striped">
		<tr><th>Name</th><th>Desription</th><th>Url</th><th>Image</th><th>Action</th></tr>
		@foreach ($projects as $project)
		<tr>
			<td>{{$project->name}}</td>
			<td>{{$project->description}}</td>
			<td>{{$project->url}}</td>
			<td><img src="{{$project->image}}" class="img-thumbnail" width="100" height="80"/></td>
			<td>
				{{ Form::open(['method'=>'delete', 'route'=>['projects.destroy', $project->id], 'class'=>'delete']) }}
				
				<button type="submit" class="delete"><i class="icon-trash"></i> </button>
				{{ Form::close()}}
				{{ HTML::decode(HTML::linkRoute('projects.edit', '<i class="icon-edit icon-2x"></i> ', [$project->id], ['class'=>'edit']))}}
			</td>
		</tr>
		@endforeach
	</table>
@stop
