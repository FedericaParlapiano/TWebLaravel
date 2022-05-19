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

//progetto

Route::get('/', 'PublicController@homepage')
        ->name('homepage');


Route::get('/catalog', 'PublicController@showCatalog')
        ->name('catalog');

Route::get('/catalog/annuncio/{idAnnuncio}', 'PublicController@showAnnuncio')
        ->name('annuncio');

//Rotte per l'autenticazione
Route::get('/login', 'PublicController@showHomepageLogin')
        ->name('login');

Route::get('/account', 'UserController@showAccount')
        ->name('account');

/*
Route::post('login', 'Auth\LoginController@login');

//Rotta per il logout
Route::post('logout', 'Auth\LoginController@logout')
        ->name('logout');

// Rotte per la registrazione
Route::get('register', 'Auth\RegisterController@showRegistrationForm')
        ->name('register');

Route::post('register', 'Auth\RegisterController@register');


// Rotte per la registrazione
Route::get('register', 'Auth\RegisterController@showRegistrationForm')
        ->name('register');

Route::post('register', 'Auth\RegisterController@register');


Route::view('/where', 'where')
        ->name('where');
*/

// Rotte inserite dal comando artisan "ui vue --auth" 
// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
