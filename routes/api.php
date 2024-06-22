<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Daftarkan API untuk jadi Endpoint

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Login
Route::post('/login', [App\Http\Controllers\Api\AuthController::class, 'login']);

// LogOut
Route::post('/logout', [App\Http\Controllers\Api\AuthController::class, 'logout'])->middleware('auth:sanctum');

// Company
Route::get('/company', [App\Http\Controllers\Api\CompanyController::class, 'show'])->middleware('auth:sanctum');
