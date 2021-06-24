<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;

use App\Http\Resources\ServicioResource;
use Exception;

class ServicioController extends Controller
{
    public function index()
    {
        return ServicioResource::collection(Servicio::all());
    }

    public function store(Request $request)
    {
        try
        {
            $servicio = $request->all();

            Servicio::create($servicio);
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

    public function show(Servicio $servicio)
    {
        return new ServicioResource($servicio);
    }

    public function update(Request $request, Servicio $servicio)
    {
        try
        {
            $datos = $request->all();

            $servicio->update($datos);
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

    public function destroy(Servicio $servicio)
    {
        try
        {
            $servicio->delete();

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
