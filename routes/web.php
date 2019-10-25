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

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Route::get('traumatic/create', 'TraumaticController@create')->name('traumatic.create');
Route::get('traumatic/index', 'TraumaticController@index')->name('traumatic.index');
Route::post('traumatic/store', 'TraumaticController@store')->name('traumatic.store');
