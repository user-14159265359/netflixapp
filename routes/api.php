<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SerieController;
use App\Http\Controllers\MovieController;

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
Route::post('/category/store', [CategoryController::class, 'store']);
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/category/show/{id}', [CategoryController::class, 'show']);
Route::delete('/category/destroy/{id}', [CategoryController::class, 'destroy']);
Route::put('/category/update/{id}', [CategoryController::class, 'update']);

Route::post('/movie/store', [MovieController::class, 'store']);
Route::get('/movies', [MovieController::class, 'index']);
Route::get('/movie/show/{id}', [MovieController::class, 'show']);
Route::delete('/movie/destroy/{id}', [MovieController::class, 'destroy']);
Route::put('/movie/update/{id}', [MovieController::class, 'update']);

Route::post('/serie/store', [SerieController::class, 'store']);
Route::get('/series', [SerieController::class, 'index']);
Route::get('/serie/show/{id}', [SerieController::class, 'show']);
Route::delete('/serie/destroy/{id}', [SerieController::class, 'destroy']);
Route::put('/serie/update/{id}', [SerieController::class, 'update']);
