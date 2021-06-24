<?php

namespace App\Http\Controllers;

use App\Models\Usuario_Soporte;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller
{

    public function register(Request $request)
    {
        return Usuario_Soporte::create([
            'Nombre' => $request->input('Nombre'),
            'Apellido' => $request->input('Apellido'),
            'Id_Cargo' => $request->input('Id_Cargo'),
            'login' => $request->input('login'),
            'password' => Hash::make($request->input('password'))
        ]);
    }

    public function login(Request $request)
    {
        if (!Auth::attempt($request->only('login', 'password'))) {
            return response([
                'message' => 'Invalid credentials!'
            ], Response::HTTP_UNAUTHORIZED);
        }
        $user = Auth::user();
        return $user;
    }

    public function user()
    {
        return Auth::Usuario_Soporte();
    }

    public function logout()
    {
        $cookie = Cookie::forget('jwt');

        return response([
            'message' => 'Success'
        ])->withCookie($cookie);
    }
}
