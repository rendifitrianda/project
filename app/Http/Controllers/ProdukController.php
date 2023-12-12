<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['list_produk'] = Produk::all();
        return view('produk.index', $data);
    }

    


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        // dd(request()->all()); 
        $produk = new produk;
        $produk->nama = request('nama');
        $produk->stok = request('stok');
        $produk->harga = request('harga');
        $produk->berat = request('berat');
        $produk->deskripsi = request('deskripsi');
        $produk->save();

        return redirect('produk')->with('success', 'Data Berhasil Di Tambahkan');
    }

    

    /**
     * Display the specified resource.
     */
    public function show(Produk $produk)
    {
        $data['produk'] = $produk;
        return view('produk.show', $data);  
        // dd ($data);  
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produk $produk)
    {
        $data['produk'] = $produk;
        return view('produk.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Produk $produk)
    {
        $produk->nama = request('nama');
        $produk->stok = request('stok');
        $produk->harga = request('harga');
        $produk->berat = request('berat');
        $produk->deskripsi = request('deskripsi');
        $produk->save();

        return redirect('produk')->with('warning', 'Data Berhasil Di Edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Produk $produk)
    {
        $produk->delete();
        return redirect('produk');
    }
}
