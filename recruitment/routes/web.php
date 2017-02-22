<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
 */

Route::get('/', function () {
	return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::group(['middleware' => 'auth'], function () {
	Route::group(['prefix' => 'admin'], function () {
		Route::get('/', function () {
			return view('admin.master');
		});
		Route::resource('cv', 'CvController', ['only' => [
			'index', 'show', 'create', 'store', 'update', 'edit',
		]]);
		Route::resource('recruit', 'RecruitmentController', ['only' => [
			'index', 'show', 'edit', 'update', 'store', 'create',
		]]);
		Route::get('delete/{id}', ['as' => 'admin.recruit.destroy', 'uses' => 'RecruitmentController@destroy']);
		Route::resource('user', 'UserController');
	});
});
