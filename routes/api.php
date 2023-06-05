<?php

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

Route::get('users', 'App\Http\Controllers\UserController@index');
Route::post('users/create', 'App\Http\Controllers\UserController@create');
Route::get('users/{id}', 'App\Http\Controllers\UserController@show');
Route::get('users/delete/{id}', 'App\Http\Controllers\UserController@destroy');
Route::post('users/update', 'App\Http\Controllers\UserController@update');
