<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CanalController as Canal;
use App\Http\Controllers\CargoController as Cargo;
use App\Http\Controllers\IncidenteController as Incidente;
use App\Http\Controllers\ServicioController as Servicio;
use App\Http\Controllers\SolucionController as Solucion;
use App\Http\Controllers\StatusController as Status;
use App\Http\Controllers\TipoIncidenteController as TipoIncidente;
use App\Http\Controllers\UsuarioClienteController as UsuarioCliente;
use App\Http\Controllers\UsuarioSoporteController as UsuarioSoporte;
use App\Http\Controllers\Nivel_RiesgoController as NivelRiesgo;

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

Route::post('register', [\App\Http\Controllers\AuthController::class, 'register']);
Route::post('login', [\App\Http\Controllers\AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('user', [\App\Http\Controllers\AuthController::class, 'user']);
    Route::post('logout', [\App\Http\Controllers\AuthController::class, 'logout']);
});

Route::apiResource('canal', Canal::class)
    ->only(['index', 'store', 'show', 'update', 'destroy']);

Route::apiResource('cargo', Cargo::class)
    ->only(['index', 'store', 'show', 'update', 'destroy']);

Route::apiResource('incidente', Incidente::class)
    ->only(['index', 'store', 'show', 'update', 'destroy']);

Route::apiResource('servicio', Servicio::class)
    ->only(['index', 'store', 'show', 'update', 'destroy']);

Route::apiResource('solucion', Solucion::class)
    ->only(['index', 'store', 'show', 'update', 'destroy']);

Route::apiResource('status', Status::class)
    ->only(['index', 'store', 'show', 'update', 'destroy']);

Route::apiResource('tipo_incidente', TipoIncidente::class)
    ->only(['index', 'store', 'show', 'update', 'destroy']);

Route::apiResource('usuario_cliente', UsuarioCliente::class)
    ->only(['index', 'store', 'show', 'update', 'destroy']);

Route::apiResource('usuario_cliente', UsuarioSoporte::class)
    ->only(['index', 'store', 'show', 'update', 'destroy']);

Route::apiResource('nivel_riesgo', NivelRiesgo::class)
    ->only(['index', 'store', 'show', 'update', 'destroy']);


