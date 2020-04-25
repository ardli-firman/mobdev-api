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

Route::post('registrasi', 'API\Auth\RegistrasiController@register');
Route::post('login', 'API\Auth\LoginController@login');
Route::post('refresh', 'API\Auth\LoginController@refresh');

Route::middleware('auth:api')->group(function () {
    Route::post('logout', 'API\Auth\LoginController@logout');
    Route::get('user', function (Request $request) {
        return $request->user();
    });
});
