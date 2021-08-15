<?php

use App\Http\Controllers\Api\Auth\AuthController;
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

Route::group([], function () {
    Route::group(['prefix' => 'auth'], function () {
        Route::post('login', [\App\Http\Controllers\Api\Auth\AuthenticationController::class, 'login']);
        Route::post('register', [\App\Http\Controllers\Api\Auth\AuthenticationController::class, 'register']);

        Route::group(['middleware' => 'auth:api'], function () {
//            dd("hi");
            Route::post('logout', [\App\Http\Controllers\Api\Auth\AuthenticationController::class, 'logout']);
        });
    });


    Route::group(['middleware' => 'jwt.check'], function () {
        Route::resources([
            'posts' => \App\Http\Controllers\Api\PostController::class,
        ]);
    });
});
