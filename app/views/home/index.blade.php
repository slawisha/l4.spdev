@extends('layouts.default')
@section('jumbotron')
	<div class="jumbotron">
	  <div class="container">
	  	<img src = "{{ URL::asset('/uploads/me.jpg')}}" class="img-thumbnail pull-right" />
	    <h2>Hello and welcome!</h2>
	    <p>My name is Slaviša Petrović. I am an engineer and web developer. I develop web applications using PHP, Laravel and Wordpress. 
	    </p>
	    <p>{{ HTML::linkRoute('contact', 'Contact me', [], array('class'=>"btn btn-primary")) }}</p>
	  </div>
	</div><!-- end jumbotron -->
@stop

@section('content')
	<h3>Portfolio</h3>
	<div class="row">
	@foreach ($projects as $project)	
		<div class="col-md-6 project">
			<h4><a href="{{ $project->url }}">{{ $project->name }}</a></h4>
			<a href="{{ $project->url }}"><img src="{{ $project->image }}" class="img-thumbnail" /></a>
			<p>{{ $project->description}} </p>
		</div>
	@endforeach
	</div>
@stop

@section('aside')
	<h4>I translated Code Bright</h4>
	<a href="http://www.leanpub.com/codebright-sr"><img src = "{{ URL::asset('/uploads/code_bright_sr.jpg')}}" class="img-thumbnail " /></a>
@stop