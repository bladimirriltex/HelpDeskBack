<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cookie;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Resources\UserResource;
use Exception;


class AuthController extends Controller
{
    public function register(Request $request){
        return User::create([
            'login'=>$request->input('login'),
            'password'=>Hash::make($request->input('password'))
        ]);
    }

    public function login(Request $request)
    {
        if(!Auth::attempt($request->only('login', 'password'))){
            return response([
                'message'=>'Invalid Credentials!'
            ], Response::HTTP_UNAUTHORIZED);
        }

        $user = Auth::user();
        $token = $user->createToken('token')->plainTextToken;
        $cookie = cookie('jwt', $token, 60*24);

        return response([
            'res'=>$token,
            'message'=> $user,
        ])->withCookie($cookie);
    }

    public function user()
    {
        try
        {
            return Auth::user();
        }
        catch(Exception $e)
        {
            return response()->json([
                'res' => false,
                'message' =>'Error.......'
            ],401);
        }
    }

    public function logout()
    {
        $cookie = Cookie::forget('jwt');

        return response([
            'message'=>'Success'
        ])->withCookie($cookie);
    }

}
