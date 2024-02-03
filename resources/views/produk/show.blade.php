<x-app>
    <div class="container ">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        Detail Data Produk
                    </div>
                    <div class="card-body">
                        <h3>{{ $produk->nama }}</h3>
                        <hr>
                        <p>
                            <br>Rp. {{ $produk->harga }}
                            <br>Stok : {{ $produk->stok }}
                            <br>Berat : {{ $produk->berat }} kg
                            <br>seller : {{ $produk->seller->nama }}
                            <br>tanggal Produk : {{ $produk->created_at->format('d M Y') }}
                        </p>
                        <p>
                            deskripsi: {{ $produk->deskripsi }}
                        </p>
                        <p>
                            <img src="{{ asset('public/' . $produk->foto) }}" alt="">
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>
