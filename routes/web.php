<?php

Route::get('/', 'PagesController@index');

Route::get('profile', 'PagesController@profile');

Route::get('/home', 'HomeController@index');

Auth::routes();
