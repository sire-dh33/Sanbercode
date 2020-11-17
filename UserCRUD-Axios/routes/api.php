<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// menambahkan route untuk person
Route::get('/person','App\Http\Controllers\PersonController@all');
Route::get('/person/{id}','App\Http\Controllers\PersonController@show');
Route::post('/person','App\Http\Controllers\PersonController@store');
Route::put('/person/{id}','App\Http\Controllers\PersonController@update');
Route::delete('/person/{id}','App\Http\Controllers\PersonController@delete');
