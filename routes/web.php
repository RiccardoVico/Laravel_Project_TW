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

Route::get('/', function () {
    return view('layouts/public');
    
});

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

Route::get('/locatario',function(){
    return view('/locatario');
});

Route::get('/locatore',function(){
    return view('locatore');
});
Route::get('/admin',function(){
    return view('admin');
});
Route::post('/admininserimentofaq','AdminController@inseriscifaq')
       ->name('admininserimentofaq');//fare
//logoutmessaggiprofilo
Route::get('/gestisciofferte',function(){
    return view('gestioneofferte');//fare
});
