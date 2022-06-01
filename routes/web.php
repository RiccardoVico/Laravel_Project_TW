<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('login', 'Auth\LoginController@showLoginForm')
        ->name('login');

Route::post('login', 'Auth\LoginController@login');
Route::post('logout','Auth\LoginController@logout')
        ->name('logout');

Route::get('register', 'Auth\RegisterController@showRegisterForm')
        ->name('register');

Route::post('register', 'Auth\RegisterController@create')
        ->name('register.store');

Route::get('/locatore', 'PublicController@showHomeLocatore')
        ->name('home_locatore')->middleware('can:isLocatore');

Route::get('/gestisci_offerte', 'PublicController@showGestisciOfferte')
        ->name('gestisci_offerte');

Route::get('/locatario', 'PublicController@showHomeLocatario')
        ->name('home_locatario')->middleware('can:isLocatario');

Route::get('/admin', 'PublicController@showHomeAdmin')
        ->name('home_admin')->middleware('can:isAdmin');

Route::post('admininserimentofaq','AdminController@store')->name('insfaq');

Route::view('/inseriscifaq','inseriscifaq')
->name('inseriscifaq');

Route::get('/statistiche','AdminController@totaleannunci')
        ->name('statistiche');

Route::view('/inserisciannuncio', 'inserisciannuncio')
        ->name('inserimentoannuncio');

Route::post('inserimentoann','LocatoreController@inserisciannuncio');

Route::post('/statistiche','AdminController@totaleannunci')
        ->name('statistiche');
Route::get('/stats','AdminController@tot')
        ->name('stats');
//logoutmessaggiprofilo
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::post('/provafiltraggio','LocatarioController@showfiltro')-> name('filtraggio1');
Route::get('/storagein/{nome}','LocatoreController@inserimentoperazione')
        ->name('storagein');