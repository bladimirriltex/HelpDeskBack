<?php

namespace App\Http\Controllers;

use App\Http\Resources\TipoProblemaResource;
use App\Models\Tipo_Problema;
use Exception;
use Illuminate\Http\Request;

class TipoProblemaController extends Controller
{
    public function index()
    {
        return TipoProblemaResource::collection(Tipo_Problema::all());
    }

    public function store(Request $request)
    {
        try
        {
            $problema = $request->all();

            Tipo_Problema::create($problema);
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

    public function show(Tipo_Problema $tipo_Problema)
    {
        return new TipoProblemaResource($tipo_Problema);
    }

    public function update(Request $request, Tipo_Problema $tipo_Problema)
    {
        try
        {
            $datos = $request->all();

            $tipo_Problema->update($datos);
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

    public function destroy(Tipo_Problema $tipo_Problema)
    {
        try
        {
            $tipo_Problema->delete();

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
