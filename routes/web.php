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

Route::resource('usuarios', 'UsuarioController');

Route::resource('casas', 'CasaController');

Route::get('dropdownlist', 'DataController@getCountries');
Route::get('dropdownlist/getstates/{id}','DataController@getStates');
Route::get('loader','LoaderController@index');