<?php

namespace App\Http\Controllers;

use App\Http\Resources\ConfiguracionesResource;
use App\Models\Configuraciones;
use Exception;
use Illuminate\Http\Request;

class ConfiguracionesController extends Controller
{
    public function index()
    {
        return ConfiguracionesResource::collection(Configuraciones::all());
    }

    public function store(Request $request)
    {
        try
        {
            $configuraciones = $request->all();

            Configuraciones::create($configuraciones);
            return response()->json([
                'res' => true,
                'message' =>'Registro creado Correctamente'
            ],200);
        }
        catch(Exception $e)
        {
            return response()->json([
                'res' => false,
                'message' =>'Error al crear el registro'
            ],400);
        }
    }

    public function show(Configuraciones $configuraciones)
    {
        return new ConfiguracionesResource($configuraciones);
    }

    public function update(Request $request, Configuraciones $configuraciones)
    {
        try
        {
            $datos = $request->all();

            $configuraciones->update($datos);
            return response()->json([
                'res' => true,
                'message' =>'Registro actualizado Correctamente'
            ],200);
        }
        catch (Exception $e) {
            return response()->json([
                'res' => false,
                'message' =>'Error al actualizar el registro'
            ],400);
        }
    }

    public function destroy(Configuraciones $configuraciones)
    {
        try
        {
            $configuraciones->delete();

            return response()->json([
                'message' => 'Success'
            ]);
        }
        catch (Exception $e) {
            return response()->json([
                'res' => false,
                'message' =>'Error al eliminar el registro'
            ],400);
        }
    }
}
