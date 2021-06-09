<?php

namespace App\Http\Controllers;

use App\Models\Usuario_Cliente;
use Illuminate\Http\Request;

use App\Http\Resources\UsuarioClienteResource;

class UsuarioClienteController extends Controller
{
    public function index()
    {
        return UsuarioClienteResource::collection(Usuario_Cliente::latest()->paginate());
    }

    public function store(Request $request)
    {
        $usuario_cliente = $request->all();

        Usuario_Cliente::create($usuario_cliente);
        return response()->json([
            'res' => true,
            'message' =>'Registro creado Correctamente'
        ],200);
    }

    public function show(Usuario_Cliente $usuario_Cliente)
    {
        return new UsuarioClienteResource($usuario_Cliente);
    }

    public function update(Request $request, Usuario_Cliente $usuario_Cliente)
    {
        $datos = $request->all();

        $usuario_Cliente->update($datos);
        return response()->json([
            'res' => true,
            'message' =>'Registro actualizado Correctamente'
        ],200);
    }

    public function destroy(Usuario_Cliente $usuario_Cliente)
    {
        $usuario_Cliente->delete();

        return response()->json([
            'message' => 'Success'
        ]);
    }
}
