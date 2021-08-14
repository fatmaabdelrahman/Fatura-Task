<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => 'auth','as'=>'admin.'], function () {

    Route::get('/', \App\Http\Controllers\Admin\IndexController::class)->name('index');
    Route::group(['middleware' => ['check-permissions']], function () {
        Route::resources([
            'posts' => \App\Http\Controllers\Admin\PostController::class,
            'users' => \App\Http\Controllers\Admin\UserController::class,
            'roles' => \App\Http\Controllers\Admin\RoleController::class,
        ]);
    });

});

require __DIR__.'/auth.php';
