<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CanalController as Canal;
use App\Http\Controllers\CargoController as Cargo;
use App\Http\Controllers\IncidenteController as Incidente;
use App\Http\Controllers\ServicioController as Servicio;
use App\Http\Controllers\SolucionController as Solucion;
use App\Http\Controllers\StatusController as Status;
use App\Http\Controllers\RolController as Rol;
use App\Http\Controllers\TipoIncidenteController as TipoIncidente;
use App\Http\Controllers\UsuarioClienteController as UsuarioCliente;
use App\Http\Controllers\UsuarioSoporteController as UsuarioSoporte;
use App\Http\Controllers\Nivel_RiesgoController as NivelRiesgo;
use App\Http\Controllers\ConfiguracionesController as Configuraciones;
use App\Http\Controllers\InventarioController as Inventario;
use App\Http\Controllers\TipoProblemaController as Tipo_Problema;
use App\Http\Controllers\VersionController as Version;
use App\Http\Controllers\UserController as User;
use Illuminate\Auth\AuthenticationException;

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


Route::post('user', [\App\Http\Controllers\AuthController::class, 'register']);
Route::post('login', [\App\Http\Controllers\AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('logout', [\App\Http\Controllers\AuthController::class, 'logout']);
});

Route::get('totalIncidentes', [\App\Http\Controllers\IncidenteController::class, 'totalIncidentes']);
Route::get('sinresolverIncidentes', [\App\Http\Controllers\IncidenteController::class, 'sinresolverIncidentes']);
Route::get('resueltosIncidentes', [\App\Http\Controllers\IncidenteController::class, 'resueltosIncidentes']);
Route::get('deldiaIncidentes', [\App\Http\Controllers\IncidenteController::class, 'deldiaIncidentes']);
Route::get('requerimiento', [\App\Http\Controllers\IncidenteController::class, 'RequeriminetoServicio']);

Route::apiResource('canal', Canal::class)
    ->only(['index', 'store', 'show', 'update', 'destroy']);

Route::apiResource('cargo', Cargo::class)
    ->only(['index', 'store', 'show', 'update', 'destroy']);

Route::apiResource('rol', Rol::class)
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

Route::apiResource('usuario_soporte', UsuarioSoporte::class)
    ->only(['index', 'store', 'show', 'update', 'destroy']);

Route::apiResource('nivel_riesgo', NivelRiesgo::class)
    ->only(['index', 'store', 'show', 'update', 'destroy']);

Route::apiResource('configuraciones', Configuraciones::class)
    ->only(['index', 'store', 'show', 'update', 'destroy']);

Route::apiResource('inventario', Inventario::class)
    ->only(['index', 'store', 'show', 'update', 'destroy']);

Route::apiResource('tipo_problema', Tipo_Problema::class)
    ->only(['index', 'store', 'show', 'update', 'destroy']);

Route::apiResource('version', Version::class)
    ->only(['index', 'store', 'show', 'update', 'destroy']);

Route::apiResource('user', User::class)
    ->only(['index', 'show', 'update', 'destroy']);


