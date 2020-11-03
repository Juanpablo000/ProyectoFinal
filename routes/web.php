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
/*enrutar las vistas del proyecto*/
Route::get('/', 'NoticiasController@show');
Route::view('/acerca', 'acerca')->name('acerca');
Route::view('/autor', 'autor')->name('autor');

Route::view('/contacto', 'contacto')->name('contacto');
Route::get('/entrada/{id}', 'EntradaController@show');