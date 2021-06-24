<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Http\Request;

use App\Http\Resources\RolResource;
use Exception;

class RolController extends Controller
{
    public function index()
    {
        return RolResource::collection(Rol::all());
    }

    public function store(Request $request)
    {
        try
        {
            $rol = $request->all();

            Rol::create($rol);
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

    public function show(Rol $rol)
    {
        return new RolResource($rol);
    }

    public function update(Request $request, Rol $rol)
    {
        try
        {
            $datos = $request->all();

            $rol->update($datos);
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

    public function destroy(Rol $rol)
    {
        try
        {
            $rol->delete();

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
