<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/chat', 'ChatController@chat');

Route::post('saveToSession','ChatController@saveToSession');

Route::post('deleteSession','ChatController@deleteSession');

Route::post('getOldMessage','ChatController@getOldMessage');

Route::post('/send', 'ChatController@send');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
