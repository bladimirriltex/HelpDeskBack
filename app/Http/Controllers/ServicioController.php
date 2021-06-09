<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;

use App\Http\Resources\ServicioResource;

class ServicioController extends Controller
{
    public function index()
    {
        return ServicioResource::collection(Servicio::latest()->paginate());
    }

    public function store(Request $request)
    {
        $servicio = $request->all();

        Servicio::create($servicio);
        return response()->json([
            'res' => true,
            'message' =>'Registro creado Correctamente'
        ],200);
    }

    public function show(Servicio $servicio)
    {
        return new ServicioResource($servicio);
    }

    public function update(Request $request, Servicio $servicio)
    {
        $datos = $request->all();

        $servicio->update($datos);
        return response()->json([
            'res' => true,
            'message' =>'Registro actualizado Correctamente'
        ],200);
    }

    public function destroy(Servicio $servicio)
    {
        $servicio->delete();

        return response()->json([
            'message' => 'Success'
        ]);
    }
}
