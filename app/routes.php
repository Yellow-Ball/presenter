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


/*

/ - homepage
/slides - json response with new slides
/admin - admin panel
/admin/

 */

Route::get('/', ['as' => 'home', 'uses' => 'SlidesController@index']);

// Session routes (login / logout)
Route::get('login', ['as' => 'login', 'uses' => 'SessionsController@create']);
Route::post('login', ['as' => 'login.process', 'uses' => 'SessionsController@store', 'before' => 'csrf']);
Route::get('logout', ['as' => 'logout', 'uses' => 'SessionsController@destroy']);
Route::get('slides', ['as' => 'slides', 'uses' => 'SlidesController@json']);

// Admin Routes
Route::group([ 'prefix' => 'admin', 'before' => 'auth' ], function(){
	Route::get('/', ['as' => 'admin.index', 'uses' => 'AdminClientsController@index']);
	Route::get('/client/{slug}/activate', [ 'as' => 'admin.client.activate', 'uses' => 'SettingsController@activate' ]);
	Route::post('/client/{slug}/image', 	  [ 'as' => 'admin.client.image',    'uses' => 'ImageController@store' ]);
	Route::delete('/client/{slug}/image/{image}', 	  [ 'as' => 'admin.client.image.delete',    'uses' => 'ImageController@destroy' ]);
	Route::resource('client', 'AdminClientsController');
	Route::resource('settings', 'AdminClientsController');
});