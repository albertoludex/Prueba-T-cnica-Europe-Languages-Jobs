<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DogController;

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

Route::get('/perros', [DogController::class, 'index']);
Route::post('/perros', [DogController::class, 'store']);
Route::delete('/perros/{id}', [DogController::class, 'delete']);

Route::put('/perros/{id}', [DogController::class, 'update']);
Route::get('/perros/{id}', [DogController::class, 'show']);