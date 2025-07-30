<?php

use App\Http\Controllers\Api\v1\AuthController;
use App\Http\Controllers\Api\v1\MovieController;
use Illuminate\Support\Facades\Route;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:api')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::group(['prefix' => 'movies'], function () {
        Route::get('/detail/{movie}', [MovieController::class, 'show']);
        Route::get('/list', [MovieController::class, 'index']);
        Route::post('/create', [MovieController::class, 'store']);
        Route::post('/update/{movie}', [MovieController::class, 'update']);
        Route::delete('/{movie}', [MovieController::class, 'destroy']);
    });
});