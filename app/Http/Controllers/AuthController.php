<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{

    function showLogin()
    {
        // dd(request()->all());
        return view('login');
    }


    function loginProcess()
    {
       if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
        return redirect('admin/beranda')->with('success', 'login Berhasil');
       }else{
        return back()->with('danger', 'Login Gagal Silahkan cek Email dan Password Anda');
       }
    }

    function logout()
    {
        Auth::logout();
        return redirect('login');
    }


}
