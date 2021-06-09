<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Http\Request;

use App\Http\Resources\RolResource;

class RolController extends Controller
{
    public function index()
    {
        return RolResource::collection(Rol::latest()->paginate());
    }

    public function store(Request $request)
    {
        $rol = $request->all();

        Rol::create($rol);
        return response()->json([
            'res' => true,
            'message' =>'Registro creado Correctamente'
        ],200);
    }

    public function show(Rol $rol)
    {
        return new RolResource($rol);
    }

    public function update(Request $request, Rol $rol)
    {
        $datos = $request->all();

        $rol->update($datos);
        return response()->json([
            'res' => true,
            'message' =>'Registro actualizado Correctamente'
        ],200);
    }

    public function destroy(Rol $rol)
    {
        $rol->delete();

        return response()->json([
            'message' => 'Success'
        ]);
    }
}
