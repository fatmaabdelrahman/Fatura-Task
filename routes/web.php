<?php

namespace App\Http\Controllers\Admin;
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

    Route::get('/', IndexController::class)->name('index');
    Route::group(['middleware' => ['check-permissions']], function () {
        Route::resources([
            'posts' => PostController::class,
            'users' =>UserController::class,
            'roles' =>RoleController::class,
        ]);
    });

});

require __DIR__.'/auth.php';
