<?php

use App\Http\Controllers\CreateUserController;
use App\Http\Controllers\DeleteUserController;
use App\Http\Controllers\GetUserByIdController;
use App\Http\Controllers\ListUserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UpdateUserController;
use Illuminate\Support\Facades\Route;


Route::post('/login', [LoginController::class, 'login']);

Route::middleware('auth:api')->group(function () {
    Route::get('/user', [ListUserController::class, 'execute']);
    Route::get('/user/{id}', [GetUserByIdController::class, 'execute']);
    Route::post('/user', [CreateUserController::class, 'execute']);
    Route::put('/user/{id}', [UpdateUserController::class, 'execute']);
    Route::delete('/user/{id}', [DeleteUserController::class, 'execute']);
});
