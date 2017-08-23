<?php

Route::get('/register', 'RegistrationsController@create');
Route::post('/register', 'RegistrationsController@store');

Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');

Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/create', 'TasksController@create');
Route::get('/tasks/get', 'TasksController@get');
Route::get('/tasks/get-incomplete', 'TasksController@getIncomplete');
Route::post('/tasks', 'TasksController@store');
Route::post('/tasks/complete/{task}', 'TasksController@edit');
Route::get('/tasks/complete/{task}', 'TasksController@edit');

Route::get('/', 'WelcomeController@index');
Route::get('/home', 'WelcomeController@index');
