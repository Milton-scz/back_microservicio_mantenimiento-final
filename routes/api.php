<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActivoController;
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
Route::get('/activos', [ActivoController::class, 'index']);
Route::post('/activos', [ActivoController::class, 'store']);
Route::get('/activos/{activo}', [ActivoController::class, 'show']);
Route::put('/activos/{activo}', [ActivoController::class, 'update']);
Route::delete('/activos/{activo}', [ActivoController::class, 'destroy']);