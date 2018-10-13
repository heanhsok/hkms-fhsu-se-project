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
    return view('pages.home-nonlogin');
});
Route::get('/register-standard', function () {
    return view('pages.register-standard');
});
Route::get('/register-premium', function () {
    return view('pages.register-premium');
});
Route::get('/login', function () {
    return view('pages.login');
});
