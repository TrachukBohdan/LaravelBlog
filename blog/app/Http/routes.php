<?php

	Route::get("/create-post/{id?}", 'BlogController@createPost');
	Route::get("/", "HomeController@index");
