<?php namespace Slawisha\Services\Validators;

class Contact extends Validator{

	public static $rules = array(
			'name' => 'required',
			'email' => 'required|email',
			'subject' => 'required',
			'message' => 'required'
		);
}

