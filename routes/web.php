<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});



Route::get('/todos','App\Http\Controllers\todoController@index');



Route::get('todos/{id}', 'App\Http\Controllers\todoController@show');


Route::get('/create', 'App\Http\Controllers\todoController@create');


Route::post('/create', 'App\Http\Controllers\todoController@store');



Route::get('todos/{id}/edit', 'App\Http\Controllers\todoController@edit');


Route::post('todos/{id}', 'App\Http\Controllers\todoController@update');



Route::get('todos/{id}/delete', 'App\Http\Controllers\todoController@delete');



Route::get('todos/{id}/complete', 'App\Http\Controllers\todoController@complete');


