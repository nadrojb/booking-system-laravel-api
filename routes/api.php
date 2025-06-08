<?php

use App\Http\Controllers\Api\UserAuthenticationController;
use Illuminate\Support\Facades\Route;


Route::post('/login', [UserAuthenticationController::class, 'login']);
Route::post('/register', [UserAuthenticationController::class, 'register']);


Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [UserAuthenticationController::class, 'logout']);
});
