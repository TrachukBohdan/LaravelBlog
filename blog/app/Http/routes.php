<?php

	/*
	---------------------------------------------
		Категорії
	---------------------------------------------
	*/
	Route::group(['middleware' => ['web']], function(){
		Route::get('/categories', 'CategoryController@index');	
		Route::get('/create-category/{id?}', 'CategoryController@create');
		Route::post('/store-category', 'CategoryController@store');
	});


	/*
	---------------------------------------------
		Пости
	---------------------------------------------
	*/
	Route::get('/create-post/{id?}', 'BlogController@createPost');
	Route::get('/', 'HomeController@index');
