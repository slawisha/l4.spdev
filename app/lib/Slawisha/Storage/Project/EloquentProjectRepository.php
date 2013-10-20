<?php namespace Slawisha\Storage\Project;

use Slawisha\Storage\Project\Project;

class EloquentProjectRepository implements ProjectRepositoryInterface
{
	public function all()
	{
		return Project::all();
	}

	public function find($id)
	{
		return Project::find($id);
	}

	public function create($input)
	{
		$updir = public_path() . '/uploads';
		
		$project = new Project;

		foreach ($input as $key => $value) {
			if($key == 'image') {

				\Input::file('image')->move($updir, \Input::file('image')->getClientOriginalName() );
				$value = 'uploads/' . \Input::file('image')->getClientOriginalName();
			}
			if($key != '_token') $project->$key = $value;
		}

		$project->save();

		//return Project::create($input);
	}

	public function update($id, $input)
	{
		$updir = public_path() . '/uploads';
		
		$project = Project::find($id);

		foreach ($input as $key => $value) {
			if($key == 'image'){
					if(\Input::hasFile('image')){
					\Input::file('image')->move($updir, \Input::file('image')->getClientOriginalName());
					$value = 'uploads/' . \Input::file('image')->getClientOriginalName();
					} else {
					$value = $project->image;
					}				
				}
			if($key != '_token' && $key!= '_method') $project->$key = $value;
		}

		$project->save();
	}

	public function delete($id)
	{
		Project::find($id)->delete();
		
	}
}