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
    return redirect('/home');
});

// Route::get('/home', 'HomeController@index');

Route::get('/terminos-condiciones', 'TerminosYCondicionesController@index');

Route::get('/faq', 'FaqController@index');

Route::get('/contact', 'ContactController@index');

Route::get('/profile', 'ProfileController@index');

Route::get('/product', 'ProductController@index');

Route::get('/cart', 'CartController@index');

Route::get('/categories', 'CategoryController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
