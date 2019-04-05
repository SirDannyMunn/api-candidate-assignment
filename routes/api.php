<?php

// Categories
Route::get('categories', 'CategoryController@index')->name('api.categories');

// Adverts
Route::get('adverts', 'AdvertController@index')->name('api.adverts');

// Users
Route::post('user/auth', 'UserController@auth')->name('api.user.auth');
