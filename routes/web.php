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

Auth::routes();
