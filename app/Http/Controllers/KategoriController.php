<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $data['list_kategori'] = Kategori::all();
        return view('kategori.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $r)
    {
        $file = $r->file('foto');
        $namaFile = $file->hashName();
        $simpanFile = $file->storeAs('foto', $namaFile);

        $kategori  = new kategori;
        $kategori->nama = request('nama'); 
        $kategori->harga = request('harga');
        $kategori->foto =  $namaFile;
        $kategori->deskripsi = request('deskripsi');
        $kategori->expired = request('expired');
        $kategori->save();

        return redirect('admin/kategori')->with('success', 'Data Berhasil Di Tambahkan');;
    }

    /**
     * Display the specified resource.
     */
    public function show(Kategori $kategori)
    {
       $data ['kategori'] = $kategori;
       return view('kategori.show', $data);
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kategori $kategori)
    {
        $data ['kategori'] = $kategori;
        return view('kategori.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Kategori $kategori)
    {
        $kategori->nama = request('nama');
        $kategori->harga = request('harga');
        $kategori->foto = request('foto');
        $kategori->deskripsi = request('deskripsi');
        $kategori->expired = request('expired');
        $kategori->save();

        return redirect('admin/kategori')->with('success', 'Data Berhasil Di Edit');;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Kategori $kategori)
    {
        $kategori->delete();
        return redirect('admin/kategori');
    }
}
