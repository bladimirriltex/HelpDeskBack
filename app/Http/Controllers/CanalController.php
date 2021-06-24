<?php

namespace App\Http\Controllers;

use App\Models\Canal;
use Illuminate\Http\Request;

use App\Http\Resources\CanalResource;
use Exception;

class CanalController extends Controller
{
    public function index()
    {
        return CanalResource::collection(Canal::all());
    }

    public function store(Request $request)
    {
        try
        {
            $canal = $request->all();

            Canal::create($canal);
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

    public function show(Canal $canal)
    {
        return new CanalResource($canal);
    }

    public function update(Request $request, Canal $canal)
    {
        try
        {
            $datos = $request->all();

            $canal->update($datos);
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

    public function destroy(Canal $canal)
    {
        try
        {
            $canal->delete();

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
