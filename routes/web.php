<?php

Route::get('/register', 'RegistrationsController@create');
Route::post('/register', 'RegistrationsController@store');

Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');

Route::get('/tasks', 'TasksController@index');

Route::get('/', 'WelcomeController@index');
Route::get('/home', 'WelcomeController@index');
