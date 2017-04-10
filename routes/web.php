<?php

/*
 * Pages
 */

Route::get('/', 'PagesController@index');

Route::get('profile', 'PagesController@profile');

Route::get('settings', 'PagesController@settings');


/*
 * Home
 */

Route::get('/home', 'HomeController@index');


/*
 * Blade
 */
Route::get('blade', 'BladeController@blade');


/*
 * Users
 */

Route::get('users', 'UsersController@index')->middleware('authenticated');

/* Create */
Route::get('users/create', 'UsersController@create');

/* Store */
Route::post('users', 'UsersController@store');


/*
 * Auth
 */

Auth::routes();
