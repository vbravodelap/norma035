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

// Traumatic survey
Route::get('traumatic/create', 'TraumaticController@create')->name('traumatic.create');
Route::get('traumatic/index', 'TraumaticController@index')->name('traumatic.index');
Route::post('traumatic/store', 'TraumaticController@store')->name('traumatic.store');

// Risk survey
Route::get('risk/create', 'RiskController@create')->name('risk.create');
Route::post('risk/store', 'RiskController@store')->name('risk.store');
Route::get('risk/index', 'RiskController@index')->name('risk.index');
Route::get('risk/detail/{id}', 'RiskController@detail')->name('risk.detail');
Route::get('risk/getDominio/{id}', 'RiskController@getDominio')->name('risk.dominio');
Route::get('risk/getCategoria/{id}', 'RiskController@getCategoria')->name('risk.categoria');

// Environment
Route::get('environment/create', 'EnvironmentController@create')->name('environment.create');