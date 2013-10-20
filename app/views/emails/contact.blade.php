@extends('layouts.default')

@content
	<h3>{{ $name }}</h3>
	<h3>{{ $email }}</h3>
	<h4>{{ $subject }}</h4>
	<p>{{ $messagetext }}</p>
@stop