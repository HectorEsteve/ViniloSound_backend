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
use App\Http\Controllers\AuthController;


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
Route::prefix('/')->group(function () {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/logout/{id}', [AuthController::class, 'logout']);
    Route::post('/check-auth', [AuthController::class, 'verifyCredentials']);
    Route::post('/check-email', [AuthController::class, 'verifyEmail']);
    Route::get('/check-admin/{id}', [AuthController::class, 'checkIfAdmin']);
    Route::get('/check-root/{id}', [AuthController::class, 'checkIfRoot']);
});

Route::prefix('users')->group(function () {
    Route::get('/', [UserController::class, 'index']);
    Route::get('/{id}', [UserController::class, 'show']);
    Route::post('/{id}/ascend-to-admin', [UserController::class, 'ascendToAdmin']);
    Route::post('/', [UserController::class, 'store']);
    Route::put('/{id}/degrade-to-user', [UserController::class, 'degradeToUser']);
    Route::put('/{id}', [UserController::class, 'update']);
    Route::delete('/{id}', [UserController::class, 'destroy']);
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
    Route::get('/{id}', [RolController::class, 'show']);
    Route::post('/', [RolController::class, 'store']);
    Route::put('/{id}', [RolController::class, 'update']);
    Route::delete('/{id}', [RolController::class, 'destroy']);
});

Route::prefix('genres')->group(function () {
    Route::get('/', [GenreController::class, 'index']);
    Route::get('/{id}', [GenreController::class, 'show']);
    Route::post('/', [GenreController::class, 'store']);
    Route::put('/{id}', [GenreController::class, 'update']);
    Route::delete('/{id}', [GenreController::class, 'destroy']);
});

Route::prefix('songs')->group(function () {
    Route::get('/', [SongController::class, 'index']);
    Route::get('/random', [SongController::class, 'getRandomSongs']);
    Route::get('/{id}', [SongController::class, 'show']);
    Route::post('/', [SongController::class, 'store']);
    Route::put('/{id}', [SongController::class, 'update']);
    Route::delete('/{id}', [SongController::class, 'destroy']);
});

Route::prefix('bands')->group(function () {
    Route::get('/', [BandController::class, 'index']);
    Route::get('/random', [BandController::class, 'getRandomBands']);
    Route::get('/{id}', [BandController::class, 'show']);
    Route::post('/', [BandController::class, 'store']);
    Route::put('/{id}', [BandController::class, 'update']);
    Route::delete('/{id}', [BandController::class, 'destroy']);
});

Route::prefix('collections')->group(function () {
    Route::get('/', [CollectionController::class, 'index']);
    Route::get('/random', [CollectionController::class, 'getRandomCollections']);
    Route::post('/{id}/add-vinyl', [CollectionController::class, 'addVinyl']);
    Route::post('/{id}/remove-vinyl', [CollectionController::class, 'removeVinyl']);
    Route::get('/{id}', [CollectionController::class, 'show']);
    Route::post('/', [CollectionController::class, 'store']);
    Route::put('/{id}', [CollectionController::class, 'update']);
    Route::delete('/{id}', [CollectionController::class, 'destroy']);
});

Route::prefix('vinyls')->group(function () {
    Route::get('/', [VinylController::class, 'index']);
    Route::get('/random', [VinylController::class, 'getRandomVinyls']);
    Route::get('/{id}', [VinylController::class, 'show']);
    Route::post('/', [VinylController::class, 'store']);
    Route::put('/{id}', [VinylController::class, 'update']);
    Route::delete('/{id}', [VinylController::class, 'destroy']);
});

