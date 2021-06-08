<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CanalController as Canal;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('register_usuario_soporte', [\App\Http\Controllers\AuthController::class, 'register_usuario_soporte']);
Route::post('login', [\App\Http\Controllers\AuthController::class, 'login']);

Route::middleware('auth::sanctum')->group(function(){
    Route::get('usuario_soporte', [\App\Http\Controllers\AuthController::class, 'usuario_soporte']);
    Route::post('logout', [\App\Http\Controllers\AuthController::class, 'logout']);
});

Route::apiResource('canal', Canal::class)
    ->only(['index', 'store', 'show', 'update', 'destroy']);
