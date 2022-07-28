<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
//clase que sirve para inicio de sesion
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function login(Request $request){

        $this->validateLogin($request);
        //login true
        //si lo que se esta enviando realmente existe en nuestra tabla
        if (Auth::attempt($request->only('email','password'))) {
            return response()->json([
                'token' => $request->user()->createToken($request->name)->plainTextToken,
                'message' => 'Success'
            ]);
        }else{
            return response()->json([
                'message' => 'No autorizado'
            ],401);
        }
        //login false
    }

    public function validateLogin(Request $request){

        return $request->validate([
            'email'=>'required',
            'password'=>'required',
            'name'=>'required' //dispositivo movil
        ]);
    }
}
