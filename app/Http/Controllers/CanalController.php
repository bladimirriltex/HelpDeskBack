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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Canal  $canal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Canal $canal)
    {
        $datos = $request->all();

        $canal->update($datos);
        return response()->json([
            'res' => true,
            'message' =>'Registro actualizado Correctamente'
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Canal  $canal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Canal $canal)
    {
        $canal->delete();

        return response()->json([
            'message' => 'Success'
        ]);
    }
}
