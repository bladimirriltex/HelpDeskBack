<?php

namespace App\Http\Controllers;

use App\Models\Solucion;
use Illuminate\Http\Request;

use App\Http\Resources\SolucionResource;
use Exception;

class SolucionController extends Controller
{
    public function index()
    {
        return SolucionResource::collection(Solucion::latest()->paginate());
    }

    public function store(Request $request)
    {
        try{
            $solucion = $request->all();
            Solucion::create($solucion);

            return response()->json([
                'res' => true,
                'message' =>'Registro creado Correctamente'
            ],200);

        }catch(Exception $e){
            return response()->json([
                'res' => false,
                'message' =>'Error al crear el registro'
            ],400);
        }
    }

    public function show(Solucion $solucion)
    {
        return new SolucionResource($solucion);
    }

    public function update(Request $request, Solucion $solucion)
    {
        try {
            $datos = $request->all();

            $solucion->update($datos);
            return response()->json([
                'res' => true,
                'message' =>'Registro actualizado Correctamente'
            ],200);
        } catch (Exception $e) {
            return response()->json([
                'res' => false,
                'message' =>'Error al actualizar el registro'
            ],400);
        }
    }

    public function destroy(Solucion $solucion)
    {
        try {
            $solucion->delete();

            return response()->json([
                'message' => 'Success'
            ],200);
        } catch (Exception $e) {
            return response()->json([
                'res' => false,
                'message' =>'Error al eliminar el registro'
            ],400);
        }

    }
}
