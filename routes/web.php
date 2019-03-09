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
// Route::get('/opportunity', function() {
//     return view('opportunity.opportunity-home-standarduser');
// });

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

Route::group(['prefix' => 'admin','middleware' => ['role:admin'], 'as'=>'admin.'],function(){
    
    Route::get('/', function() {
        return view('admin.index');
    })->name('index');

    Route::resource('account', 'AdminAccountController');

    Route::get('getaccounts', 'AdminAccountController@getAccounts')->name('account.getaccounts');

    Route::get('setting', 'AdminAccountController@setting')->name('setting');

    Route::get('education/{id}', 'AdminAccountController@education')->name('education.show');
    Route::get('education/{user_id}/edit/{edu_id}', 'AdminAccountController@education_edit')->name('education.edit');

    Route::get('work/{id}', 'AdminAccountController@work')->name('work.show');
    Route::get('work/{user_id}/edit/{work_id}', 'AdminAccountController@work_edit')->name('work.edit');

    Route::get('volunteer/{id}', 'AdminAccountController@volunteer')->name('volunteer.show');
    Route::get('volunteer/{user_id}/edit/{vol_id}', 'AdminAccountController@volunteer_edit')->name('volunteer.edit');
    
    Route::post('changepassword', 'AdminAccountController@changepassword')->name('changepassword');
});

Route::get('hello', 'AdminAccountController@getAccounts');

// Route::get('/opportunity', function() {
//     return view('user.opportunity.index');
// })->name('opportunity.index');
