<?php

namespace App\Http\Controllers;

use App\Models\Incidente;
use Illuminate\Http\Request;

use App\Http\Resources\IncidenteResource;

class IncidenteController extends Controller
{
    public function index()
    {
        return IncidenteResource::collection(Incidente::latest()->paginate());
    }

    public function store(Request $request)
    {
        $incidente = $request->all();

        Incidente::create($incidente);
        return response()->json([
            'res' => true,
            'message' =>'Registro creado Correctamente'
        ],200);
    }

    public function show(Incidente $incidente)
    {
        return new IncidenteResource($incidente);
    }

    public function update(Request $request, Incidente $incidente)
    {
        $datos = $request->all();

        $incidente->update($datos);
        return response()->json([
            'res' => true,
            'message' =>'Registro actualizado Correctamente'
        ],200);
    }

    public function destroy(Incidente $incidente)
    {
        $incidente->delete();

        return response()->json([
            'message' => 'Success'
        ]);
    }
}
