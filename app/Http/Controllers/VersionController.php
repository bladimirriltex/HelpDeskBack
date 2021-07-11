<?php

namespace App\Http\Controllers;

use App\Http\Resources\VersionResource;
use App\Models\Version;
use Exception;
use Illuminate\Http\Request;

class VersionController extends Controller
{
    public function index()
    {
        return VersionResource::collection(Version::all());
    }

    public function store(Request $request)
    {
        try
        {
            $version = $request->all();

            Version::create($version);
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

    public function show(Version $version)
    {
        return new VersionResource($version);
    }

    public function update(Request $request, Version $version)
    {
        try
        {
            $datos = $request->all();

            $version->update($datos);
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

    public function destroy(Version $version)
    {
        try
        {
            $version->delete();

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
