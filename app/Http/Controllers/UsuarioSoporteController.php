<?php

namespace App\Http\Controllers;

use App\Models\Usuario_Soporte;
use Illuminate\Http\Request;

use App\Http\Resources\UsuarioSoporteResource;
use Exception;

class UsuarioSoporteController extends Controller
{
    public function index()
    {
        return UsuarioSoporteResource::collection(Usuario_Soporte::all());
    }

    public function store(Request $request)
    {
        try
        {
            $usuario_soporte = $request->all();

            Usuario_Soporte::create($usuario_soporte);
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

    public function show(Usuario_Soporte $usuario_soporte)
    {
        return new UsuarioSoporteResource($usuario_soporte);
    }

    public function update(Request $request, Usuario_Soporte $usuario_soporte)
    {
        try
        {
            $datos = $request->all();

            $usuario_soporte->update($datos);
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

    public function destroy(Usuario_Soporte $usuario_soporte)
    {
        try
        {
            $usuario_soporte->delete();

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
