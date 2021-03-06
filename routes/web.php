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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/spa', function() {
    return view('spa');
})->name('spa');

Route::get('/skills', function () {
    return ['Laravel', 'PHP', 'Vue', 'JavaScript', 'Tooling'];
});

Route::resource('projects', 'ProjectController');

Route::get('/statuses', 'StatusesController@index');
Route::post('/statuses', 'StatusesController@store');


