<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormatController;
use App\Http\Controllers\RecordCompanyController;
use App\Http\Controllers\RolController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('formats')->group(function () {
    Route::get('/', [FormatController::class, 'index']);
    Route::get('/{id}', [FormatController::class, 'show']);
    Route::post('/', [FormatController::class, 'store']);
    Route::put('/{id}', [FormatController::class, 'update']);
    Route::delete('/{id}', [FormatController::class, 'destroy']);
});

Route::prefix('record-companies')->group(function () {
    Route::get('/', [RecordCompanyController::class, 'index']);
    Route::get('/{id}', [RecordCompanyController::class, 'show']);
    Route::post('/', [RecordCompanyController::class, 'store']);
    Route::put('/{id}', [RecordCompanyController::class, 'update']);
    Route::delete('/{id}', [RecordCompanyController::class, 'destroy']);
});

Route::prefix('roles')->group(function () {
    Route::get('/', [RolController::class, 'index']);
    Route::get('/users', [RolController::class, 'usersByRol']);
    Route::get('/users/{id}', [RolController::class, 'usersByRolId']);
    Route::get('/{id}', [RolController::class, 'show']);
    Route::post('/', [RolController::class, 'store']);
    Route::put('/{id}', [RolController::class, 'update']);
    Route::delete('/{id}', [RolController::class, 'destroy']);
});
