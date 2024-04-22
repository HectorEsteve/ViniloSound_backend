<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormatController;

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
