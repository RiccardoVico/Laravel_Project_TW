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
|//ciaomarisonia123455

*/

Route::get('/', 'PublicController@showHome')
        ->name('home');

Route::get('/catalogo', 'PublicController@show')
        ->name('catalogo');

Route::view('/chi_siamo', 'chi_siamo')
        ->name('chi_siamo');

Route::get('/faq','PublicController@showfaq')
        ->name('faq');

Route::view('/login', 'login')
        ->name('login');

Route::view('/register', 'register')
        ->name('register');

Route::post('register', 'UtenteController@store');

Route::get('/locatore', 'PublicController@showHomeLocatore')
        ->name('home_locatore');

Route::get('/gestisci_offerte', 'PublicController@showGestisciOfferte')
        ->name('gestisci_offerte');

Route::get('/locatario', 'PublicController@showHomeLocatario')
        ->name('home_locatario');

Route::get('/admin', 'PublicController@showHomeAdmin')
        ->name('home_admin');

Route::post('admininserimentofaq','AdminController@store');

Route::view('/inseriscifaq','inseriscifaq')
->name('inseriscifaq');

Route::get('/statistiche','AdminController@statistiche')
        ->name('statistiche');

Route::view('/inserisciannuncio', 'inserisciannuncio')
        ->name('inserimentoannuncio');

Route::post('inserimentoann','LocatoreController@inserisciannuncio');

Route::get('/statistiche','AdminController@totaleannunci')
        ->name('statistiche');
//logoutmessaggiprofilo