<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\http\Request;


class inicioController extends Controller
{
    public function index()
    {
        return view('inicio');
    }



}
