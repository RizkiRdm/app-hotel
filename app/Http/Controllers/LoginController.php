<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function masuk()
    {
        return view('login');
    }
    public function daftar()
    {
        return "daftar";
    }
}
