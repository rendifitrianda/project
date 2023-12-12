<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    function loginprocess(){
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')]))
        {
            return redirect('beranda')->with('succes', 'Login Berhasil');
        }

        else{
            return back()->with('danger', 'Login gagal, Silahkan cek email dan Password kembali');
        }
    }
}
