<?php namespace Slawisha\Storage\Project;

class Project extends \Eloquent
{
	protected $fillable = array('name', 'description', 'url', 'image');
}