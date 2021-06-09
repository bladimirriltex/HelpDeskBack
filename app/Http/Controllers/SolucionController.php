<?php

namespace App\Http\Controllers;

use App\Models\Solucion;
use Illuminate\Http\Request;

use App\Http\Resources\SolucionResource;

class SolucionController extends Controller
{
    public function index()
    {
        return SolucionResource::collection(Solucion::latest()->paginate());
    }

    public function store(Request $request)
    {
        $solucion = $request->all();

        Solucion::create($solucion);
        return response()->json([
            'res' => true,
            'message' =>'Registro creado Correctamente'
        ],200);
    }

    public function show(Solucion $solucion)
    {
        return new SolucionResource($solucion);
    }

    public function update(Request $request, Solucion $solucion)
    {
        $datos = $request->all();

        $solucion->update($datos);
        return response()->json([
            'res' => true,
            'message' =>'Registro actualizado Correctamente'
        ],200);
    }

    public function destroy(Solucion $solucion)
    {
        $solucion->delete();

        return response()->json([
            'message' => 'Success'
        ]);
    }
}
