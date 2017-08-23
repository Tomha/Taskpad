<?php

Route::get('/register', 'UsersController@register');
Route::get('/login', 'UsersController@login');
Route::get('/logout', 'UsersController@logout');
Route::post('/register', 'UsersController@add');
Route::post('/login', 'UsersController@load');

Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/remaining', 'TasksController@remaining');
Route::get('/tasks/remaining/counts', 'TasksController@remainingCounts');
Route::post('/tasks', 'TasksController@store');
Route::post('/tasks/complete/{task}', 'TasksController@complete');

Route::get('/', 'WelcomeController@index');
Route::get('/home', 'WelcomeController@index');
