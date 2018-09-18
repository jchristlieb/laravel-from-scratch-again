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
    return view('home');
});


// Auth routes
Route::get('/register', 'RegisterController@create')->name('register.create');
Route::post('/register', 'RegisterController@store')->name('register.store');
Route::get('/logout', 'SessionController@destroy')->name('session.destroy');
Route::get('login', 'SessionController@create')->name('session.create');
Route::post('login', 'SessionController@store')->name('session.store');
