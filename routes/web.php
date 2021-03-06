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
//Ruta con funcion anonima
Route::get('/', function () {
    return view('welcome');
});

//Rutas del make:auth
Auth::routes();
//Route::get(clase padre,metodo publico)->nombre de la ruta para referenciarlo en cualquier parte del codigo php
Route::get('/home', 'HomeController@index')->name('home');

require __DIR__ . '/modules/basics.php';
require __DIR__ . '/modules/eloquents.php';
require __DIR__ . '/modules/blog.php';