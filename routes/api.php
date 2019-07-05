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

Route::apiResource('user', 'API\UserController');
Route::get('profile','API\UserController@profile')->name('user.profile');
Route::get('findUser','API\UserController@search')->name('user.search');
Route::put('profile','API\UserController@updateProfile')->name('user.updateProfile');
Route::get('adminCount','API\UserController@getTotalAdmin');