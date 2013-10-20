<?php namespace Slawisha\Services\Validators;

class Project extends Validator
{
	public static $rules = array(
			'name' => 'required',
			'url' => 'required|url',
			'description' => 'required',
			'image' => 'mimes:jpeg,jpg,png,gif'
		);
}