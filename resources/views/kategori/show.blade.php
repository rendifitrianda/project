<x-app>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        info Produk
                    </div>
                    <div class="card-body">
                        <dl>
                            <dt>Nama Produk</dt>
                            <dd>{{ $kategori->nama }}</dd>
                            <dt>Harga Barang</dt>
                            <dd>{{ $kategori->harga }}</dd>
                            <dt>Detail</dt>
                            <dd>{{ $kategori->deskripsi }}</dd>
                            <dt>Gambar Produk</dt>
                            <dd>"{!! nl2br($kategori->foto) !!}"</dd>
                        </dl>
                        <div class="col-md-4">
                            <img src="{{ $kategori->foto }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>
