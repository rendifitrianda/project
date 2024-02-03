<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
// use App\Models\User;



use Faker;

class ProdukController extends Controller
{
     function index()
    {
        // $data ['list_produk'] = Produk::all();   
        $user = request()->user();
        $data['list_produk'] = $user->Produk;
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
        $produk->id_user = request()->user()->id;
        $produk->nama = request('nama');
        $produk->stok = request('stok');
        $produk->harga = request('harga');
        $produk->berat = request('berat');
        $produk->deskripsi = request('deskripsi');
        $produk->save();

        $produk->handleUploadFoto();

        return redirect('admin/produk')->with('success', 'Data Berhasil Di Tambahkan');
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

        return redirect('admin/produk')->with('success', 'Data Berhasil Di Edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Produk $produk)
    {
        $produk->delete();
        return redirect('admin/produk');
    }

    function filter()
    {
        $nama =  request('nama');
        $stok = explode(",",request('stok'));
        $data['harga_min'] = $harga_min = request('harga_min');
        $data['harga_max'] = $harga_max = request('harga_max');


        //JIKA INGIN MENGGUNAKAN SALAH SATU FILTER HARUS DI MATIKAN KE 2NYA//
        $data['list_produk'] =  Produk::where('nama', 'like', "%$nama%")->get();
        $data['list_produk'] =  Produk::whereIn('stok', $stok)->get();
        $data['list_produk'] =  Produk::whereBetween('harga', [$harga_min, $harga_max])->get();
        $data['nama'] = $nama;


        return view('produk.index', $data);
    }
}

