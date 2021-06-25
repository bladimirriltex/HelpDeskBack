<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller
{

    public function register(Request $request)
    {
        return User::create([
            'Login' => $request->input('Login'),
            'Password' => Hash::make($request->input('Password'))
        ]);
    }

    public function login(Request $request)
    {
        if (!Auth::attempt(['Login' => $request->Login, 'Password' => Hash::check($request->Password)])) {
            return response([
                'message' => 'Invalid credentials!'
            ], Response::HTTP_UNAUTHORIZED);
        }

        return response()->json([
            'log' => $request->Login
        ],400);


        //$user = Auth::user();
        //return $user;
    }

    public function user()
    {
        return Auth::User();
    }

    public function logout()
    {
        $cookie = Cookie::forget('jwt');

        return response([
            'message' => 'Success'
        ])->withCookie($cookie);
    }
}
