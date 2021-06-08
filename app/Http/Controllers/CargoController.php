<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use Illuminate\Http\Request;

use App\Http\Resources\CargoResource;

class CargoController extends Controller
{

    public function index()
    {
        return CargoResource::collection(Cargo::latest()->paginate());
    }

    public function store(Request $request)
    {
        $cargo = $request->all();

        Cargo::create($cargo);
        return response()->json([
            'res' => true,
            'message' =>'Registro creado Correctamente'
        ],200);
    }

    public function show(Cargo $cargo)
    {
        return new CargoResource($cargo);
    }

    public function update(Request $request, Cargo $cargo)
    {
        $datos = $request->all();

        $cargo->update($datos);
        return response()->json([
            'res' => true,
            'message' =>'Registro actualizado Correctamente'
        ],200);
    }

    public function destroy(Cargo $cargo)
    {
        $cargo->delete();

        return response()->json([
            'message' => 'Success'
        ]);
    }
}
