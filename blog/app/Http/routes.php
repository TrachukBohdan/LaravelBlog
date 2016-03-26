<?php

	Route::get('/categories', 'CategoryController@index');
	Route::get('/create-category/{id?}', 'CategoryController@create');

	Route::get('/create-post/{id?}', 'BlogController@createPost');
	Route::get('/', 'HomeController@index');
