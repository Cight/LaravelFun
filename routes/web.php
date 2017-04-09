<?php

Route::get('/', "PagesController@index");

Auth::routes();

Route::get('/home', 'HomeController@index');
