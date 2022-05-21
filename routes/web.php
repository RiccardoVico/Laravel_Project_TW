<?php

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

Route::get('/catalogo', 'PublicController@show');

Route::get('/chi_siamo', function () {
    return view('chi_siamo');
});

Route::get('/faq','PublicController@showfaq') ;

Route::view('/login', 'login')
        ->name('login');

Route::view('/register', 'register')
        ->name('register');

