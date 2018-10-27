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
Route::get('/about', function() {
    return 'about';
});

Route::group(['middleware'=>['auth']], function(){
    
    //'prefix'=>'profile'
    Route::resource('profile', 'UserProfileController');

    Route::resource('work', 'UserWorkExpsController');

    Route::resource('education', 'UserEducationsController');

    Route::resource('volunteer', 'UserVolunteerExpsController');

    Route::resource('opportunity', 'OpportunityPageController');
    
    Route::resource('opportunity.post', 'OpportunityPagePostController');

    // Route::resource('/education', 'UserProfileController');
    
});

Route::group(['prefix' => 'admin','middleware' => ['role:admin']],function(){
    Route::get('/', function() {
        return view('admin.index');
    })->name('admin.index');
});

// Route::get('/opportunity', function() {
//     return view('user.opportunity.index');
// })->name('opportunity.index');