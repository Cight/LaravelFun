<?php

/*
 * Pages
 */

Route::get('/', 'PagesController@index');


/*
 * Home
 */

Route::get('/loginSuccess', 'HomeController@index');

/*
 * Authenticated Routes
 */

Route::group(['middleware' => 'authenticated'], function () {

    Route::get('users', 'UsersController@index');

    Route::get('profile', 'PagesController@profile');

    Route::get('settings', 'PagesController@settings');
});

/* Authenticate the Routes */

Auth::routes();
