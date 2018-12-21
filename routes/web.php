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

Route::get('/categories/{id}', 'CategoryController@index');

// Route::get('/men', 'MenController@index');

Route::get('/product', 'ProductController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function ()
{
    Route::get('/profile', 'ProfileController@index');

    // Route::put('/profile/{id}', 'ProfileController@update');
    
    Route::get('/cart', 'CartController@index');

    Route::get('/product/create', 'ProductController@create');

    Route::post('/product/store', 'ProductController@store');

    Route::get('/product/edit', 'ProductController@indexEdit');

    Route::get('/product/{id}/edit', 'ProductController@edit');
    
    Route::put('/product/{id}/update', 'ProductController@update')->name('product.update');

    Route::delete('/product/{id}/destroy', 'ProductController@destroy');

});

    Route::resource('/product', 'ProductController')->except(['create', 'destroy', 'edit', 'store', 'indexEdit', 'update']);

    Route::get('/product/{id}', 'ProductController@show');

