<<<<<<< HEAD
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

Route::view('/catalogo', 'catalogo')
        ->name('catalogo');

Route::view('/chi_siamo', 'chi_siamo')
        ->name('chi_siamo');

Route::get('/faq', function () {
    return view('faq');
});

Route::view('/login', 'login')
        ->name('login');

Route::view('/register', 'register')
        ->name('register');

=======
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

>>>>>>> f3448eaea82f7139dd342b0b9ca0c9d5077d95c6
