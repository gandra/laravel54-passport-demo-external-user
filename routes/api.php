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

Route::get('logout', 'Auth\LoginController@logout')
    ->name('logout');

Route::get('test', 'Api\TesterController@test')
    ->name('test')
    ->middleware('auth:api');

Route::get('test/user-data', 'Api\TesterController@testUserData')
    ->name('test.user-data')
    ->middleware('auth:api');