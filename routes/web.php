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

Route::get('/', function () {
    return view('layouts.welcome');
});

// Projects Module
Route::get('/project/list', [
    'as'   => 'ListProjects',
    'uses' => 'ProjectController@index',
]);
Route::post('/project/new', [
    'as'   => 'CreateProject',
    'uses' => 'ProjectController@store',
]);
Route::get('/project/{id}/edit', [
    'as'   => 'EditProject',
    'uses' => 'ProjectController@edit',
]);
Route::post('/project/{id}/edit', [
    'as'   => 'UpdateProject',
    'uses' => 'ProjectController@update',
]);
Route::post('/project/delete/{id}', [
    'as'   => 'DeleteProject',
    'uses' => 'ProjectController@destroy',
]);