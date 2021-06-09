<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

use App\Http\Resources\StatusResource;
use Exception;

class StatusController extends Controller
{
    public function index()
    {
        return StatusResource::collection(Status::latest()->paginate());
    }

    public function store(Request $request)
    {
        try
        {
            $status = $request->all();
            Status::create($status);

            return response()->json([
                'res' => true,
                'message' =>'Exito'
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
