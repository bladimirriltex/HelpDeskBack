<?php

namespace App\Http\Controllers;

use App\Models\Usuario_Soporte;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller
{
    public function register_usuario_soporte(Request $request){
        $usuario_soporte = Usuario_Soporte::create([
            'Nombre' => $request -> input ('Nombre'),
            'Apellido' => $request -> input ('Apellido'),
            'Id_Cargo'  => $request -> input ('Id_Cargo'),
            'login' => $request -> input ('login'),
            'password' => $request -> input ('password')
        ]);

        return $usuario_soporte;
    }

    public function login(Request $request){
        if(Auth::attempt($request->only('login', 'password'))){
            return response ([
                'message'=>' Invalid credentials!'
            ], Response::HTTP_UNAUTHORIZED);
        }
        $usuario_soporte=Auth::usuario_soporte();
        $token = $usuario_soporte->createToken('token')->plainTextToken;

        $cookie=cookie('jwt', $token, 60*24);
        return response([
            'message' => 'Success'
        ])->withCookie($cookie);
    }

    public function usuario_soporte(){
        return Auth::usuario_soporte;
    }

    public function logout(Request $request){
        $cookie=Cokkie::forget('jwt');

        return response([
            'message'=>'Success'
        ])->withCookie($cookie);
    }


}
