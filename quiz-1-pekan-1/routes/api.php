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

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('register', 'AuthController@register');

});

Route::group([

    'middleware' => ['api' , 'auth'],
    'prefix' => 'admin'

], function ($router) {

    Route::post('/', 'AdminController@index');
    Route::post('change-to-admin', 'AdminController@change_to_admin');

});
