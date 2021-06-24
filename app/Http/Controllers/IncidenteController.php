<?php

namespace App\Http\Controllers;

use App\Models\Incidente;
use Illuminate\Http\Request;

use App\Http\Resources\IncidenteResource;
use Exception;

class IncidenteController extends Controller
{
    public function index()
    {
        return IncidenteResource::collection(Incidente::all());
    }

    public function store(Request $request)
    {
        try
        {
            $incidente = $request->all();

            Incidente::create($incidente);
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

    public function show(Incidente $incidente)
    {
        return new IncidenteResource($incidente);
    }

    public function update(Request $request, Incidente $incidente)
    {
        try
        {
            $datos = $request->all();

            $incidente->update($datos);
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

    public function destroy(Incidente $incidente)
    {
        try
        {
            $incidente->delete();

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
