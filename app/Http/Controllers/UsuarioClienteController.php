<?php

namespace App\Http\Controllers;

use App\Models\Usuario_Cliente;
use Illuminate\Http\Request;

use App\Http\Resources\UsuarioClienteResource;
use Exception;

class UsuarioClienteController extends Controller
{
    public function index()
    {
        return UsuarioClienteResource::collection(Usuario_Cliente::all());
    }

    public function store(Request $request)
    {
        try
        {
            $usuario_cliente = $request->all();

            Usuario_Cliente::create($usuario_cliente);
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

    public function show(Usuario_Cliente $usuario_Cliente)
    {
        return new UsuarioClienteResource($usuario_Cliente);
    }

    public function update(Request $request, Usuario_Cliente $usuario_Cliente)
    {
        try
        {
            $datos = $request->all();

            $usuario_Cliente->update($datos);
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

    public function destroy(Usuario_Cliente $usuario_Cliente)
    {
        try
        {
            $usuario_Cliente->delete();

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
