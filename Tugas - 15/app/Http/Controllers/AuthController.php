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
        $nama = $request['nama'];
        $nama2 = $request['nama2'];

        return view('halaman.welcome', ['nama' => $nama, 'nama2' => $nama2]);
    }

}
