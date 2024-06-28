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

// CheckIn
Route::post('/checkin', [App\Http\Controllers\Api\AttendanceController::class, 'checkin'])->middleware('auth:sanctum');

// CheckOut
Route::post('/checkout', [App\Http\Controllers\Api\AttendanceController::class, 'checkout'])->middleware('auth:sanctum');

// Is checkin
Route::get('/is-checkin', [App\Http\Controllers\Api\AttendanceController::class, 'isCheckedin'])->middleware('auth:sanctum');

// Update profile
Route::post('/update-profile', [App\Http\Controllers\Api\AuthController::class, 'updateProfile'])->middleware('auth:sanctum');

// Create Permission
Route::apiResource('/api-permissions', App\Http\Controllers\Api\PermissionController::class)->middleware('auth:sanctum');
