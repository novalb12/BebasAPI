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
Route::group(['prefix' => 'v1'], function () {
    Route::post('/login', 'API\UserController@login');
    Route::post('/register', 'API\UserController@register');
    Route::get('/logout', 'API\UserController@logout')->middleware('auth:api');
    Route::post('/changepassword','API\UserController@changePassword')->middleware('auth:api');
    Route::get('/tes','API\UserController@tes');
});
Route::group(['middleware' => 'auth:api'], function(){
    Route::post('details', 'API\UserController@details');
});
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
