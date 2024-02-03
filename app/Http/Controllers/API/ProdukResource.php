<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukResource extends Controller
{
    public function index()
    {
        return Produk::all();
    }

    public function store()
    {
        if(request('nama') && request('harga') && request('berat') && request('deskripsi') && request('stok')) {
            // Kode yang akan dijalankan jika semua field tidak kosong
            // ...
    
            // Contoh: Simpan data ke dalam database
           $produk = new Produk;

           $produk->nama = request('nama');
           $produk->harga = request('harga');
           $produk->berat = request('berat');
           $produk->deskripsi = request('deskripsi');
           $produk->stok = request('stok');
           $produk->save();

           return collect([
            'respond' => 200,
            'data'  => $produk
           ]);

        } else {
            // Blok else akan dijalankan jika ada setidaknya satu field yang kosong
            return collect([
                'respond' => 500,
                'message' => "Field ada yang kosong"
            ]);
        }
    }

    public function show($id)
    {
        $produk = Produk::find($id);
        if($produk) {
            $produk->nama = request('nama') ?? $produk->nama;
            $produk->harga = request('harga') ??$produk->harga;
            $produk->berat = request('berat') ?? $produk->berat;
            $produk->deskripsi = request('deskripsi') ??$produk->deskripsi;
            $produk->stok = request('stok') ?? $produk->stok;
            $produk->save();
 
            return collect([
                'status' => 200,
                'data' => $produk
            ]);
        }
        return collect([
            'respond' => 500,
            'message' => "Produk tidak ada"
        ]);
    }
    

    public function update()
    {
        $produk = Produk::find($id);
        if($produk) {
            return collect([
                'status' => 200,
                'data' => $produk

            ]);
        }
        return collect([
            'respond' => 500,
            'message' => "Produk tidak ada"
        ]);
    }        

    public function destroy($id)
    {   
        $produk = Produk::find($id);
        if($produk) {
            $produk->delete();
            return collect([
                'status' => 200,
                'data' => 'Produk berhasil di hapus'
            ]);
        }
        return collect([
            'respond' => 500,
            'message' => "Produk tidak ada"
        ]);
    }
}