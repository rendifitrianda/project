<x-app>
    <div class="container ">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        Tambah Data
                    </div>
                    <div class="card-body">
                        <form action="{{ url('produk', $produk->id) }}" method="Post">
                            @csrf
                            @method('post')
                            <div class="form-group">
                                <label for="" class="control-label">Nama</label>
                                <input type="text" class="form-control" name="nama" value="{{ $produk->nama }} ">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Harga</label>
                                        <input type="text" class="form-control" name="harga"
                                            value="{{ $produk->harga }}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="" class="control-label">Berat</label>
                                        <input type="text" class="form-control" name="berat"
                                            value="{{ $produk->berat }}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="" class="control-label">Stok</label>
                                        <input type="text" class="form-control" name="stok"
                                            value="{{ $produk->stok }}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Deskripsi</label>
                                <textarea name="deskripsi" class="form-control">{{ $produk->deskripsi }}</textarea>
                            </div>
                            <button class="btn btn-warning float-right"><i class="fa fa-save">simpan</i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>
