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
//controlador principal
Route::get('/','FrontController');

//rutas cliente
Route::resource('cliente', 'ClienteController');
Route::get('cliente/delete/{id}','ClienteController@deleteCliente')->name('cliente.delete');

//rutas de usuario
Route::resource('usuario', 'UserController');
Route::get('delete/{id}','UserController@deleteUser')->name('usuario.delete');

//rutas login


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
