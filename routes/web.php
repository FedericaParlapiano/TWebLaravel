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

Route::get('/account', 'UserController@index')
        ->name('account');

Route::get('/locatore', 'LocatoreController@index')
        ->name('locatore')->middleware('can:isLocatore');

Route::get('/locatore/nuovoannuncio', 'LocatoreController@addAnnuncio')
        ->name('nuovoannuncio')->middleware('can:isLocatore');

Route::post('/locatore/nuovoannuncio', 'LocatoreController@submitAnnuncio');


Route::get('/locatore/modificaannuncio/{idAnnuncio}', 'LocatoreController@showUpdateAnnuncio')
        ->name('modificaannuncio')->middleware('can:isLocatore');

Route::post('/locatore/modificannuncio', 'LocatoreController@updateAnnuncio')
        ->name('modificannuncio');

Route::get('/locatore/eliminaannuncio/{idAnnuncio}', 'LocatoreController@deleteAnnuncio')
        ->name('eliminaannuncio');


Route::get('/admin', 'AdminController@index')
        ->name('admin')->middleware('can:isAdmin');

Route::get('/admin/nuovafaq', 'AdminController@addFaq')
        ->name('nuovafaq')->middleware('can:isAdmin');

Route::post('/admin/nuovafaq', 'AdminController@submitFaq');

Route::get('/admin/modificafaq/{faqId}', 'AdminController@showModificaFaq')
        ->name('modificafaq')->middleware('can:isAdmin');

Route::post('/admin/modificafaq/{faqId}', 'AdminController@modificaFaq');

Route::post('/admin/eliminafaq/{faqId}', 'AdminController@eliminaFaq')
        ->name('eliminafaq');

Route::get('/locatario', 'LocatarioController@index')
        ->name('locatario')->middleware('can:isLocatario');

Route::post('/locatario/ricerca', 'LocatarioController@showRicerca')
        ->name('ricerca')->middleware('can:isLocatario');

Route::post('/locatario/messaggio', 'LocatarioController@sendMessaggio')
        ->name('messaggio')->middleware('can:isLocatario');

Route::post('/locatario/proposta', 'LocatarioController@sendProposta')
        ->name('proposta')->middleware('can:isLocatario');


//Rotte per l'autenticazione
Route::get('login', 'Auth\LoginController@showLoginForm')
        ->name('login');

Route::post('login', 'Auth\LoginController@login');

//Rotta per il logout
Route::post('logout', 'Auth\LoginController@logout')
        ->name('logout');

// Rotte per la registrazione
Route::get('register', 'Auth\RegisterController@showRegistrationForm')
        ->name('register');

Route::post('register', 'Auth\RegisterController@register');


Route::get('/modificaaccount', 'UserController@showModificaAccount')
        ->name('modificaaccount')->middleware('can:isUser');

Route::post('/modificaaccount', 'UserController@modificaAccount')
        ->name('modificaaccount');



// Rotte inserite dal comando artisan "ui vue --auth" 
// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');