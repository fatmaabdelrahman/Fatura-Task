<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Api\Auth\AuthenticationController;
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

Route::group(['as'=>'api.'], function () {
    Route::group(['prefix' => 'auth'], function () {
        Route::post('login', [AuthenticationController::class, 'login']);
        Route::post('register', [AuthenticationController::class, 'register']);

        Route::group(['middleware' => 'auth:api'], function () {
            Route::post('logout', [AuthenticationController::class, 'logout']);
        });
    });


    Route::group(['middleware' =>[ 'jwt.check','api-check-permissions']], function () {
        Route::resources([
            'posts' =>PostController::class,
        ]);
    });
});
