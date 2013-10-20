<?php

use Slawisha\Storage\Project\EloquentProjectRepository as Project;

class ProjectController extends \BaseController {

	protected $project;

	public function __construct(Project $project)
	{
		$this->project = $project;
		$this->beforeFilter('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$projects = $this->project->all();
		return View::make('projects.index', compact('projects'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		
		return View::make('projects.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//todo validation
		$v = new Slawisha\Services\Validators\Project;

		if($v->passes()){

			$this->project->create(Input::all());
			
			return Redirect::route('projects.index')->with('message', 'Project created succesufully');
		}
		
		return Redirect::back()->withInput()->withErrors($v->getErrors());
				 
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return View::make('projects.show', compact($this->project->find($id)));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return View::make('projects.edit')->with('project', $project = $this->project->find($id) );
		//return View::make('projects.edit', compact($this->project->find($id), 'project'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$v = new Slawisha\Services\Validators\Project;

		if($v->passes()){
			$this->project->update($id, Input::all());

			return Redirect::route('projects.index')->with('message', 'Project updated succesufully');
		}

		return Redirect::back()->withInput()->withErrors($v->getErrors());
		
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->project->delete($id);
		return Redirect::route('projects.index')->with('message', 'Project deleted sucesufully');
	}

}