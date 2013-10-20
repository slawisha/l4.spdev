<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/','HomeController@index');

Route::get('login', array('as'=>'login', 'uses'=>'HomeController@login'));

Route::get('logout', array('as'=>'logout', 'uses'=>'HomeController@logout'));

Route::get('contact', array('as'=>'contact', 'uses'=>'HomeController@contact'));

Route::post('/authenticate', array('as'=>'authenticate', 'uses' => 'HomeController@authenticate'));

Route::post('sendmail', array('as'=>'sendmail', 'uses'=>'HomeController@sendmail'));


Route::resource('projects','ProjectController');

