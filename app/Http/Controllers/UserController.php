<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['list_user'] = user::all();
        return view('user.index', $data);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $user = new user;
        $user->nama = request('nama');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));
        $user-> save();

        return redirect('user')->with('success', 'Data Berhasil Di Tambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(user $user)
    {
        $data['user'] = $user;
        return view('user.show', $data);  
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(user $user)
    {
        $data['user'] = $user;
        return view('user.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(User $user)
    {
        $user->nama = request('nama');
        $user->email = request('email');
        if (request('password')) $user->password = request('password');

        return redirect('user')->with('warning', 'Data berhasil Di Edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(user $user)
    {
        $user->delete();
        return redirect('user');
    }
}
