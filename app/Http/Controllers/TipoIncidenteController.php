<?php

namespace App\Http\Controllers;

use App\Models\Tipo_Incidente;
use Illuminate\Http\Request;

use App\Http\Resources\TipoIncidenteResource;

class TipoIncidenteController extends Controller
{
    public function index()
    {
        return TipoIncidenteResource::collection(Tipo_Incidente::latest()->paginate());
    }

    public function store(Request $request)
    {
        $tipo_incidente = $request->all();

        Tipo_Incidente::create($tipo_incidente);
        return response()->json([
            'res' => true,
            'message' =>'Registro creado Correctamente'
        ],200);
    }

    public function show(Tipo_Incidente $tipo_Incidente)
    {
        return new TipoIncidenteResource($tipo_Incidente);
    }

    public function update(Request $request, Tipo_Incidente $tipo_Incidente)
    {
        $datos = $request->all();

        $tipo_Incidente->update($datos);
        return response()->json([
            'res' => true,
            'message' =>'Registro actualizado Correctamente'
        ],200);
    }

    public function destroy(Tipo_Incidente $tipo_Incidente)
    {
        $tipo_Incidente->delete();

        return response()->json([
            'message' => 'Success'
        ]);
    }
}
