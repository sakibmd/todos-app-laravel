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
    return view('welcome');
});

Route::get('todos', 'TodosController@index')->name('todos.all');;
Route::get('todos/{id}', 'TodosController@show')->name('todos.show');
Route::get('new-todos', 'TodosController@create')->name('todos.create');
Route::post('store-todos', 'TodosController@store')->name('todos.store');
Route::get('todos/{todo}/edit', 'TodosController@edit')->name('todos.edit');
Route::post('todos/{todo}/update', 'TodosController@update')->name('todos.update');
Route::get('todos/{todo}/delete', 'TodosController@destroy')->name('todos.destroy');
Route::get('todos/{todo}/completed', 'TodosController@completed')->name('todos.completed');