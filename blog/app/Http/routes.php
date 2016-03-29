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

	Route::group(['middleware' => 'web'], function(){
		Route::get('/posts/{id}', 'BlogController@categoryPosts');
		Route::get('/create-post/{id}', 'BlogController@createPost');
		Route::post('/store-post', 'BlogController@storePost');
		Route::get('/delete-post/{id}', 'BlogController@deletePost');
		Route::get('/edit-post/{id}', 'BlogController@editPost');
		Route::post('/change-post', 'BlogController@changePost');
		Route::get('/post/{id}', 'BlogController@singlePost');
	});

	Route::get('/', 'HomeController@index');
