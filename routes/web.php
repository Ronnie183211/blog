<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

	//get login form view
	Route::get('/', ['uses' => 'PostController@index']);

	// Authentication Routes
	Auth::routes();

	Route::group(['middleware' => ['auth']], function()
	{
		Route::resource('posts', 'PostController');

		Route::get('/home', ['uses' => 'PostController@home']);

		Route::get('/logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);
	});
