<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SepatuController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

Route::get('sepatu', [SepatuController::class, 'index'])->middleware('auth:sanctum');
Route::post('sepatu', [SepatuController::class, 'store'])->middleware('auth:sanctum');
Route::get('sepatu/{id}', [SepatuController::class, 'show'])->middleware('auth:sanctum');
Route::put('sepatu/{id}', [SepatuController::class, 'update'])->middleware('auth:sanctum');
Route::delete('sepatu/{id}', [SepatuController::class, 'destroy'])->middleware('auth:sanctum');