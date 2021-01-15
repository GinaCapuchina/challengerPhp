<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'GuestController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/me/apps/create', 'DeveloperController@create');
Route::post('/me/apps', 'DeveloperController@store');

Route::get('/me/apps/{app}/edit', 'DeveloperController@edit');
Route::put('/me/apps/{app}', 'DeveloperController@update');
