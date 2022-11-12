<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('projects', 'App\Http\Controllers\ProjectController@index');
Route::get('projects/{project}', 'App\Http\Controllers\ProjectController@show');
Route::post('projects', 'App\Http\Controllers\ProjectController@store');
Route::put('projects/{project}', 'App\Http\Controllers\ProjectController@update');
Route::patch('projects/{project}', 'App\Http\Controllers\ProjectController@update');
Route::delete('projects/{project}', 'App\Http\Controllers\ProjectController@delete');

Route::get('tasks', 'App\Http\Controllers\TaskController@index');
Route::get('tasks/{task}', 'App\Http\Controllers\TaskController@show');
Route::post('tasks', 'App\Http\Controllers\TaskController@store');
Route::put('tasks/{task}', 'App\Http\Controllers\TaskController@update');
Route::patch('tasks/{task}', 'App\Http\Controllers\TaskController@update');
Route::delete('tasks/{task}', 'App\Http\Controllers\TaskController@delete');

Route::get('users', 'App\Http\Controllers\UserController@index');
Route::get('users/{user}', 'App\Http\Controllers\UserController@show');
Route::post('users', 'App\Http\Controllers\UserController@store');
Route::put('users/{user}', 'App\Http\Controllers\UserController@update');
Route::patch('users/{user}', 'App\Http\Controllers\UserController@update');
Route::delete('users/{user}', 'App\Http\Controllers\UserController@destroy');
