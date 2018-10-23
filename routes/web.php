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
    // return view('welcome');
    return redirect('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>['auth']], function(){
    

    Route::get('/profile', function(){
        return view('user.profile');
    })->name('user.profile');
    
});

Route::group(['prefix' => 'admin','middleware' => ['role:admin']],function(){
    Route::get('/', function() {
        return view('admin.index');
    })->name('admin.index');
});
