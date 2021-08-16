<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Route;


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
