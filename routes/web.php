<?php

Route::get('/', function () {
    return view('auth.register');
});

Auth::routes();

Route::get('/chat', 'ChatController@index')->name('chat');
Route::get('/chat/{conversationId}', 'ChatController@index');

Route::get('/profile', 'ProfileController@edit');
Route::post('/profile', 'ProfileController@update');


// rutas
Route::get('/api/conversations', 'ConversationController@index');
Route::get('/api/messages', 'MessageController@index');
Route::post('/api/messages', 'MessageController@store');
