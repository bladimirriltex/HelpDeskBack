<?php

namespace App\Http\Controllers;

use App\Http\Resources\InventarioResource;
use App\Models\Inventario;
use Exception;
use Illuminate\Http\Request;

class InventarioController extends Controller
{
    public function index()
    {
        return InventarioResource::collection(Inventario::all());
    }

    public function store(Request $request)
    {
        try
        {
            $inventario = $request->all();

            Inventario::create($inventario);
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

    public function show(Inventario $inventario)
    {
        return new InventarioResource($inventario);
    }

    public function update(Request $request, Inventario $inventario)
    {
        try
        {
            $datos = $request->all();

            $inventario->update($datos);
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

    public function destroy(Inventario $inventario)
    {
        try
        {
            $inventario->delete();

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
