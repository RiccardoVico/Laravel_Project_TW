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
        ->name('register_store');

Route::get('/locatore', 'PublicController@showHomeLocatore')
        ->name('home_locatore')->middleware('can:isLocatore');

Route::get('/gestisci_offerte/{utente}', 'PublicController@showGestisciOfferte')
        ->name('gestisci_offerte')->middleware('can:isLocatore');

Route::get('/locatario', 'PublicController@showHomeLocatario')
        ->name('home_locatario')->middleware('can:isLocatario');

Route::get('/admin', 'PublicController@showHomeAdmin')
        ->name('home_admin')->middleware('can:isAdmin');

Route::post('admininserimentofaq','adminController@store')->name('insfaq');

Route::view('/inseriscifaq','inseriscifaq')
        ->name('inseriscifaq');

Route::get('messaggistica', 'PublicController@showMessaggistica')
        ->name('messaggistica');

Route::get('/profilo/{idutente}','PublicController@showProfilo')
        ->name('profilo')->middleware('can:isuserbyid,idutente');

Route::post('/profilo/{idutente}', 'PublicController@modificaprofilo')
        ->name('modifica_profilo')->middleware('can:isuserbyid,idutente');

Route::get('/statistiche','AdminController@totaleannunci')
        ->name('statistiche');

Route::view('/inserisciannuncio', 'inserisciannuncio')
        ->name('inserimentoannuncio');

Route::post('inserimentoann','LocatoreController@inserisciannuncio')->name('inserimentoann');

Route::post('/statistiche','AdminController@totaleannunci')
        ->name('statistiche');
Route::get('/stats','AdminController@tot')
        ->name('stats');

//logoutmessaggiprofilo
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::post('/provafiltraggio','LocatarioController@showfiltro')-> name('filtraggio1');
Route::get('/storagein/{nome}/{imagename}','LocatoreController@inserimentoperazione')
        ->name('storagein');
Route::get('/salvafoto/{id}/{imagename}','LocatoreController@salvafoto')
        ->name('salvafoto');

Route::get('/annuncio/{annuncio}', 'PublicController@showAnnuncio')
        ->name('annuncio');
Route::view('/okay','okay')
        ->name('okay');
Route::view('/okayfaq','okayfaq')
        ->name('okayfaq');
Route::view('/ins2','ins2')
        ->name('ins2');
Route::view('/okaymodfaq','okaymodfaq')
        ->name('okaymodfaq');
Route::view('/okayeliminafaq','okayeliminafaq')
        ->name('okayeliminafaq');
Route::get('/annunciopzionati/{userId}','PublicController@annunciopzionati')->name('annunciopzionati');

Route::get('/opziona/{annuncio}', 'PublicController@opzionatoda')->name('opziona');
Route::post('/prova}', 'adminController2@totaleannunci')->name('provas');
Route::get('/eliminafaq/{idfaq}','adminController@eliminafaq')->name('eliminafaq');
Route::get('/modificafaq/{idfaq}', 'adminController@showFaq')
        ->name('modifica_faq');
Route::view('/modfaq', 'modfaq')
        ->name('modfaq');
Route::post('/modfaq2/{idfaq}', 'adminController@modificaFaq')->name('modfaq2');
Route::view('/modmod', 'modmod')
        ->name('modmod');
Route::view('/prova2/{$annunci}','prova2')->name('prova2');
