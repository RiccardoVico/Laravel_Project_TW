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
    return view('layouts/public');
});

Route::get('/catalogo', function () {
    return view('catalogo');
});

Route::get('/chi_siamo', function () {
    return view('chi_siamo');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::view('/login', 'login')
        ->name('login');

Route::view('/register', 'register')
        ->name('register');

