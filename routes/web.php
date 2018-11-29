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

Route::get('/home', 'HomeController@index');

Route::get('/terminos-condiciones', 'TerminosYCondicionesController@index');

Route::get('/faq', 'FaqController@index');

Route::get('/contacto', 'ContactController@index');

Route::get('/perfil', 'ProfileController@index');

Route::get('/producto', 'ProductController@index');

Route::get('/carrito', 'CartController@index');

Route::get('/categorias', 'CategoryController@index');
