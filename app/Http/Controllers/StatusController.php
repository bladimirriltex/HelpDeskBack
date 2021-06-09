<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

use App\Http\Resources\StatusResource;

class StatusController extends Controller
{
    public function index()
    {
        return StatusResource::collection(Status::latest()->paginate());
    }

    public function store(Request $request)
    {
        $status = $request->all();

        Status::create($status);
        return response()->json([
            'res' => true,
            'message' =>'Registro creado Correctamente'
        ],200);
    }

    public function show(Status $status)
    {
        return new StatusResource($status);
    }

    public function update(Request $request, Status $status)
    {
        $datos = $request->all();

        $status->update($datos);
        return response()->json([
            'res' => true,
            'message' =>'Registro actualizado Correctamente'
        ],200);
    }

    public function destroy(Status $status)
    {
        $status->delete();

        return response()->json([
            'message' => 'Success'
        ]);
    }
}
