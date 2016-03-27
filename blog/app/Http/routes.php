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
		Route::get('/delete-category/{id}', 'CategoryController@delete');
		Route::get('/edit-category/{id}', 'CategoryController@edit');
		Route::post('/change-category/{id}', 'CategoryController@change');
	});


	/*
	---------------------------------------------
		Пости
	---------------------------------------------
	*/
	Route::get('/create-post/{id?}', 'BlogController@createPost');
	Route::get('/', 'HomeController@index');
