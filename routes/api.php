<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Categories
Route::get('categories', 'CategoryController@index')->name('api.categories');

// Adverts
Route::get('adverts', 'AdvertController@index')->name('api.adverts');

// Users
Route::post('user/auth', 'UserController@auth')->name('api.user.auth');
