<?php


use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::post('login', [AuthController::class, 'login']);
Route::get('logout', [AuthController::class, 'logout']);
Route::post('register', [AuthController::class, 'register']);
Route::get('user', [AuthController::class, 'user'])->middleware("auth:sanctum");
Route::post('change-password', [AuthController::class, 'change_password'])->middleware("auth:sanctum");
