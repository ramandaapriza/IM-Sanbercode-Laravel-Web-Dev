<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function welcome(Request $request)
    {
        $namaDepan = ucwords($request['namaDepan']);
        $namaBelakang = ucwords($request['namaBelakang']);

        return view('welcome', ['namaDepan'=>$namaDepan, 'namaBelakang'=>$namaBelakang]);
    }
}
