<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return UserResource::collection(User::all());
    }

    public function store(Request $request)
    {
        try{
            $user = $request->all();

            User::create($user);
            return response()->json([
                'res' => true,
                'message' => 'Registro creado Correctamente'
            ], 200);
        }
        catch(Exception $e){
            return response()->json([
                'res' => false,
                'message' =>'Error al crear el registro'
            ],400);
        }
    }

    public function show(User $user)
    {
        return new UserResource($user);
    }

    public function update(Request $request, User $user)
    {
        try
        {
            $datos = $request->all();

            $user->update($datos);
            return response()->json([
                'res'=>true,
                'message'=>'Registro actualizado Correctamente'
            ], 200);
        }
        catch(Exception $e)
        {
            return response()->json([
                'res' => false,
                'message' =>'Error al actualizar el registro'
            ],400);
        }
    }

    public function destroy(User $user)
    {
        try{
            $user->delete();

            return response()->json([
                'message'=>'Success'
            ]);
        }
        catch(Exception $e)
        {
            return response()->json([
                'res' => false,
                'message' =>'Error al eliminar el registro'
            ],400);
        }

    }


}
