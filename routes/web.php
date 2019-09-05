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
Route::get('/dashboard', function () {
    return view('layouts.dashboard');
});
Route::get('/modal', function () {
    return view('layouts.modal');
});
Route::get('/index',function(){
    return view('layouts.index');
});

Auth::routes();

Route::resource('tasks','TasksController');
Route::get('/tasks/delete/{id}', 'TasksController@destroy')->name('tasks.destroy');
// Route::get('/home/{task_id}/edit', ['as' => 'edit', 'uses' => 'TasksController@edit']);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');