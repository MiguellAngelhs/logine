<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class LoginController extends Controller
{

    public function  login()
    {
        $credentials = $this->validate(request(), [
            'email' => 'email|required|string',
            'password' => 'required|string'
        ]);


        if(Auth::attempt($credentials))
        {
            return redirect()->route('inicio');
        }

        return back()->withErrors(['email' => 'las credenciales no existen']);
    }

    public function logout(){

        Auth::logout();
        return view('welcome');
    }

}
