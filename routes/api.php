<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormatController;
use App\Http\Controllers\RecordCompanyController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\BandController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\VinylController;

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

/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/

Route::prefix('users')->group(function () {
    Route::get('/', [UserController::class, 'index']);
    Route::get('/details', [UserController::class, 'indexWithDetails']);
    Route::get('/{id}/details', [UserController::class, 'showWithDetails']);
    Route::get('/{id}', [UserController::class, 'show']);
    Route::post('/', [UserController::class, 'store']);
    Route::put('/{id}', [UserController::class, 'update']);
    Route::delete('/{id}', [UserController::class, 'destroy']);

});

Route::prefix('formats')->group(function () {
    Route::get('/', [FormatController::class, 'index']);
    Route::get('/vinyls', [FormatController::class, 'vinylsByFormats']);
    Route::get('/{id}/vinyls', [FormatController::class, 'vinylsByFormat']);
    Route::get('/{id}', [FormatController::class, 'show']);
    Route::post('/', [FormatController::class, 'store']);
    Route::put('/{id}', [FormatController::class, 'update']);
    Route::delete('/{id}', [FormatController::class, 'destroy']);
});

Route::prefix('record-companies')->group(function () {
    Route::get('/', [RecordCompanyController::class, 'index']);
    Route::get('/vinyls', [RecordCompanyController::class, 'vinylsByRecordCompanies']);
    Route::get('/{id}/vinyls', [RecordCompanyController::class, 'vinylsByRecordCompany']);
    Route::get('/{id}', [RecordCompanyController::class, 'show']);
    Route::post('/', [RecordCompanyController::class, 'store']);
    Route::put('/{id}', [RecordCompanyController::class, 'update']);
    Route::delete('/{id}', [RecordCompanyController::class, 'destroy']);
});

Route::prefix('roles')->group(function () {
    Route::get('/', [RolController::class, 'index']);
    Route::get('/users', [RolController::class, 'usersByRol']);
    Route::get('/{id}/users', [RolController::class, 'usersByRolId']);
    Route::get('/{id}', [RolController::class, 'show']);
    Route::post('/', [RolController::class, 'store']);
    Route::put('/{id}', [RolController::class, 'update']);
    Route::delete('/{id}', [RolController::class, 'destroy']);
});

Route::prefix('genres')->group(function () {
    Route::get('/', [GenreController::class, 'index']);
    Route::get('/songs', [GenreController::class, 'songsByGenres']);
    Route::get('/{id}/songs', [GenreController::class, 'songsByGenre']);
    Route::get('/{id}', [GenreController::class, 'show']);
    Route::post('/', [GenreController::class, 'store']);
    Route::put('/{id}', [GenreController::class, 'update']);
    Route::delete('/{id}', [GenreController::class, 'destroy']);
});

Route::prefix('songs')->group(function () {
    Route::get('/', [SongController::class, 'index']);
    Route::get('/details', [SongController::class, 'indexWithDetails']);
    Route::get('/{id}/details', [SongController::class, 'showWithDetails']);
    Route::get('/{id}', [SongController::class, 'show']);
    Route::post('/', [SongController::class, 'store']);
    Route::put('/{id}', [SongController::class, 'update']);
    Route::delete('/{id}', [SongController::class, 'destroy']);
});

Route::prefix('bands')->group(function () {
    Route::get('/', [BandController::class, 'index']);
    Route::get('/details', [BandController::class, 'indexWithDetails']);
    Route::get('/{id}/details', [BandController::class, 'showWithDetails']);
    Route::get('/{id}', [BandController::class, 'show']);
    Route::post('/', [BandController::class, 'store']);
    Route::put('/{id}', [BandController::class, 'update']);
    Route::delete('/{id}', [BandController::class, 'destroy']);
});

Route::prefix('collections')->group(function () {
    Route::get('/', [CollectionController::class, 'index']);
    Route::get('/details', [CollectionController::class, 'indexWithDetails']);
    Route::get('/{id}/details', [CollectionController::class, 'showWithDetails']);
    Route::get('/{id}', [CollectionController::class, 'show']);
    Route::post('/', [CollectionController::class, 'store']);
    Route::put('/{id}', [CollectionController::class, 'update']);
    Route::delete('/{id}', [CollectionController::class, 'destroy']);
});

Route::prefix('vinyls')->group(function () {
    Route::get('/', [VinylController::class, 'index']);
    Route::get('/details', [VinylController::class, 'indexWithDetails']);
    Route::get('/{id}/details', [VinylController::class, 'showWithDetails']);
    Route::get('/{id}', [VinylController::class, 'show']);
    Route::post('/', [VinylController::class, 'store']);
    Route::put('/{id}', [VinylController::class, 'update']);
    Route::delete('/{id}', [VinylController::class, 'destroy']);
});

