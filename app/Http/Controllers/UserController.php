<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserDetail;
use App\Http\Requests\UserStoreRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['list_user'] = user::withCount('produk')->get();
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


    public function store(UserStoreRequest $request)
    {
        $user = new user;
        $user->nama = request('nama');
        $user->email = request('email');

        //password sudah memakai mutator yang ada di models user jadi tidak perlu memakai kan Bcrypt di controller
        $user->password = bcrypt(request('password'));
        $user-> save();

        $userDetail = new UserDetail;
        $userDetail->id_user = $user->id;
        $userDetail->no_handphone = request('no_handphone');
        $userDetail-> save();

        return redirect('admin/user')->with('success', 'Data Berhasil Di Tambah');
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
        if (request('password')) $user->password = bcrypt(request('password'));

        return redirect('admin/user')->with('success', 'Data berhasil Di Edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(user $user)
    {
        $user->delete();
        return redirect('admin/user');
    }
}
