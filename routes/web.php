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

Route::get('/catalogo', 'PublicController@showCatalogo')
        ->name('catalogo');

Route::view('/chi_siamo', 'chi_siamo')
        ->name('chi_siamo');

Route::get('/faq', 'PublicController@showFaq')
        ->name('faq');

Route::get('login', 'Auth\LoginController@showLoginForm')
        ->name('login');

Route::post('login', 'Auth\LoginController@login');

Route::post('logout', 'Auth\LoginController@logout')
        ->name('logout');

Route::get('register', 'Auth\RegisterController@showRegisterForm')
        ->name('register');

Route::post('register', 'Auth\RegisterController@create')
        ->name('register.store');

Route::get('/locatore', 'LocatoreController@index')
        ->name('home_locatore')->middleware('can:isLocatore');

Route::get('/gestisci_offerte/{utente}/{opzionati}', 'LocatoreController@gestisciOfferte')
        ->name('gestisci_offerte')->middleware('can:isLocatore');

Route::get('/locatario/{annunci?}', 'LocatarioController@index')
        ->name('home_locatario')->middleware('can:isLocatario');

Route::post('/locatario', 'LocatarioController@showAnnunciFiltrati')
        ->name('filtraggio1')->middleware('can:isLocatario');

Route::get('/profilo/{idutente}','PublicController@showProfilo')
        ->name('profilo')->middleware('can:isuserbyid,idutente');

Route::post('/profilo/{idutente}', 'PublicController@modificaprofilo')
        ->name('modifica_profilo')->middleware('can:isuserbyid,idutente');

Route::get('/admin', 'AdminController@index')
        ->name('home_admin')->middleware('can:isAdmin');

Route::post('admininserimentofaq', 'AdminController@store')
        ->name('insfaq')->middleware('can:isAdmin');

Route::view('/inseriscifaq', 'inseriscifaq')
        ->name('inseriscifaq')->middleware('can:isAdmin');

Route::get('/statistiche', 'AdminController@totaleannunci')
        ->name('statistiche')->middleware('can:isAdmin');

Route::post('inserimentoann', 'LocatoreController@inserisciannuncio')
        ->name('inserimentoann')->middleware('can:isLocatore');

Route::post('/statistiche', 'AdminController@totaleannunci')
        ->name('statistiche')->middleware('can:isAdmin');

Route::get('/stats', 'AdminController@tot')
        ->name('stats')->middleware('can:isAdmin');

Route::get('/storagein/{nome}/{imagename}', 'LocatoreController@inserimentoperazione')
        ->name('storagein')->middleware('can:isLocatore');

Route::get('/salvafoto/{id}/{imagename}', 'LocatoreController@salvafoto')
        ->name('salvafoto')->middleware('can:isLocatore');

Route::get('/annuncio/{annuncio}', 'PublicController@showAnnuncio')
        ->name('annuncio');

Route::post('/annuncio/{annuncio}', 'PublicController@opzionaAnnuncio')
        ->name('opziona_annuncio')->middleware('can:isLocatario');

Route::get('/modifica_annuncio/{annuncio}', 'LocatoreController@modificaAnnuncio')
        ->name('modifica_annuncio')->middleware('can:isLocatore');

Route::post('/modifica_annuncio/{annuncio}', 'LocatoreController@salvaModificheAnnuncio')
        ->name('salva_modifiche_annuncio')->middleware('can:isLocatore');

Route::get('/elimina_annuncio/{annuncio}', 'LocatoreController@eliminaAnnuncio')
        ->name('elimina_annuncio')->middleware('can:isLocatore');

Route::get('/assegna_annuncio/{annuncio}', 'LocatoreController@assegnaAnnuncio')
        ->name('assegna_annuncio')->middleware('can:isLocatore');

Route::view('/prova2/{$annunci}','prova2')
        ->name('prova2');

Route::view('/okay', 'okay')
        ->name('okay')->middleware('can:isLocatore');

Route::view('/okayfaq', 'okayfaq')
        ->name('okayfaq')->middleware('can:isAdmin');

Route::view('/okaymodfaq','okaymodfaq')
        ->name('okaymodfaq')->middleware('can:isAdmin');

Route::view('/okayeliminafaq','okayeliminafaq')
        ->name('okayeliminafaq')->middleware('can:isAdmin');

Route::get('/inserisciannuncio', 'LocatoreController@inserisciAnnuncio')
        ->name('inserisci_annuncio')->middleware('can:isLocatore');

Route::post('/inserisciannuncio', 'LocatoreController@storeAnnuncio')
        ->name('store_annuncio')->middleware('can:isLocatore');

Route::get('/richiedenti/{annuncio}', 'PublicController@richiedentiAnnuncio')
        ->name('richiedenti')->middleware('can:isLocatore');

Route::get('/eliminafaq/{idfaq}','AdminController@eliminafaq')
        ->name('eliminafaq')->middleware('can:isAdmin');

Route::get('/modificafaq/{idfaq}', 'AdminController@showFaq')
        ->name('modifica_faq')->middleware('can:isAdmin');

Route::view('/modfaq', 'modfaq')
        ->name('modfaq')->middleware('can:isAdmin');

Route::post('/modfaq2/{idfaq}', 'AdminController@modificaFaq')
        ->name('modfaq2')->middleware('can:isAdmin');

Route::get('messaggistica/{idutente}/{idutente2?}', 'PublicController@showMessaggistica')
        ->name('messaggistica')->middleware('can:isUser');

Route::post('messaggistica/{idutente}/{idutente2?}', 'PublicController@createMessaggio')
        ->name('messaggistica_store')->middleware('can:isUser');

Auth::routes();

