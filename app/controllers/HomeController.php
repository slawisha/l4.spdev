<?php

use Slawisha\Storage\Project\EloquentProjectRepository as Project;

class HomeController extends BaseController {

	protected $project;

	public function __construct(Project $project)
	{
		$this->project = $project;
	}

	public function index()
	{
		$projects = $this->project->all();
		return View::make('home.index', compact('projects'));
	}

	public function login()
	{
		return View::make('home.login');
	}

	public function authenticate()
	{
		$credentials = array('email'=>Input::get('email'),'password'=>Input::get('password'));
		if (Auth::attempt($credentials)){
		return Redirect::route('projects.index');
		}
		else return Redirect::route('login');
	}

	public function logout()
	{
		Auth::logout();
		return Redirect::route('login');
	}

	public function contact()
	{
		return View::make('home.contact');
	}

	public function sendMail()
	{
		$subject = Input::get('subject');
		$data = array('name' => Input::get('name'), 
			'email' => Input::get('email'), 
			'subject' => $subject, 
			'messagetext' => Input::get('message'));

		//Mail::pretend();
		Mail::send('emails.contact', $data, function($message) use($subject){
			$message->to('slawisha@yahoo.com')
				->subject($subject);
		});

		//return $data;
		return Redirect::route('contact')->with('flash_message', 'Email sent');

	}
}