<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['as' => 'todo.index', 'uses' => 'TodoController@index']);

Route::group(['prefix' => '/api/v1'], function () {
	Route::post('/todos/save', 'TodoController@store');
	Route::get('todos/{id}/delete', 'TodoController@destroy');
	Route::get('/todos/list', ['as' => 'todo.list', 'uses' => 'TodoController@list']);
});