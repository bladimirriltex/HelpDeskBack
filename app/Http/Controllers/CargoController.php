<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use Illuminate\Http\Request;

use App\Http\Resources\CargoResource;
use Exception;

class CargoController extends Controller
{

    public function index()
    {
        return CargoResource::collection(Cargo::all());
    }

    public function store(Request $request)
    {
        try
        {
            $cargo = $request->all();

            Cargo::create($cargo);
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

    public function show(Cargo $cargo)
    {
        return new CargoResource($cargo);
    }

    public function update(Request $request, Cargo $cargo)
    {
        try
        {
            $datos = $request->all();

            $cargo->update($datos);
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

    public function destroy(Cargo $cargo)
    {
        try
        {
            $cargo->delete();

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
