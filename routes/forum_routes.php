<?php 

Route::group(['prefix' => 'forum'],function(){
    
    // Route::get('/', function() {
    //     return view('forum.index');
    // })->name('forum.index');
   
    Route::get('/', [
        'as' => 'forum.index',
        'uses' => 'ForumController@index'
    ]);

    Route::post('/question-vote', [
        'as' => 'forum.questionVote',
        'uses' => 'ForumController@questionVote'
    ]);

    Route::get('/delete-question/{question_id}', [
    'uses' => 'ForumController@deleteQuestion',
    'as' => 'forum.delete',
    'middleware' => 'auth'
    ]);

    Route::get('/edit-question', [
    'uses' => 'ForumController@editQuestion',
    'as' => 'forum.editQuestion',
    'middleware' => 'auth'
    ]);

    Route::get('question/{id?}', [
    	'as' => 'forum.showQuestion',
    	'uses' => 'ForumController@showQuestion'
	]);

	Route::post('question/{id?}', [
    	'as' => 'forum.storeAnswer',
    	'uses' => 'ForumController@storeAnswer'
	]);
	
	Route::get('new-question', [
    	'as' => 'forum.showQuestionForm',
    	'uses' => 'ForumController@showQuestionForm'
	]);

	Route::post('new-question', [
    	'as' => 'forum.storeQuestion',
    	'uses' => 'ForumController@storeQuestion'
    ]);


});



?>