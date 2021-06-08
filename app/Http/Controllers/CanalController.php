<?php

namespace App\Http\Controllers;

use App\Models\Canal;
use Illuminate\Http\Request;

use App\Http\Resources\CanalResource;

class CanalController extends Controller
{
    public function index()
    {
        return CanalResource::collection(Canal::latest()->paginate());
    }

    public function store(Request $request)
    {
        $canal = $request->all();

        Canal::create($canal);
        return response()->json([
            'res' => true,
            'message' =>'Registro creado Correctamente'
        ],200);
    }

    public function show(Canal $canal)
    {
        return new CanalResource($canal);
    }

    public function update(Request $request, Canal $canal)
    {
        $datos = $request->all();

        $canal->update($datos);
        return response()->json([
            'res' => true,
            'message' =>'Registro actualizado Correctamente'
        ],200);
    }

    public function destroy(Canal $canal)
    {
        $canal->delete();

        return response()->json([
            'message' => 'Success'
        ]);
    }
}
