<?php namespace Slawisha\Storage;

use Illuminate\Support\ServiceProvider;

class StorageServiceProvider extends ServiceProvider
{
	public function register()
	{
		$this->app->bind(
				'Slawisha\Storage\Project\ProjectRepositoryInterface',
				'Slawisha\Storage\Project\EloquentProjectRepository'
			);
	}
}

