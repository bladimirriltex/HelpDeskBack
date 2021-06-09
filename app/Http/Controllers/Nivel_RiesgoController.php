<?php

namespace App\Http\Controllers;

use App\Http\Resources\Nivel_RiesgoResource;
use App\Models\Nivel_Riesgo;
use Illuminate\Http\Request;

class Nivel_RiesgoController extends Controller
{
    //
    public function index()
    {
        return Nivel_RiesgoResource::collection(Nivel_Riesgo::latest()->paginate());
    }

    public function store(Request $request)
    {
        $Nivel_Riesgo = $request->all();

        Nivel_Riesgo::create($Nivel_Riesgo);
        return response()->json([
            'res' => true,
            'message' =>'Registro creado Correctamente'
        ],200);
    }

    public function show(Nivel_Riesgo $Nivel_Riesgo)
    {
        return new Nivel_RiesgoResource($Nivel_Riesgo);
    }

    public function update(Request $request, Nivel_Riesgo $Nivel_Riesgo)
    {
        $datos = $request->all();

        $Nivel_Riesgo->update($datos);
        return response()->json([
            'res' => true,
            'message' =>'Registro actualizado Correctamente'
        ],200);
    }

    public function destroy(Nivel_Riesgo $Nivel_Riesgo)
    {
        $Nivel_Riesgo->delete();

        return response()->json([
            'message' => 'Success'
        ]);
    }
}
