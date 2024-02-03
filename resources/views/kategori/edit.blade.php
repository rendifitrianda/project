<x-app>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        Data Barang
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/kategori', $kategori->id) }}" method=POST>
                            @csrf
                            @method('post')
                            <div class="form-group">
                                <label for="control-label">Nama</label>
                                <input type="text" class="form-control" name="nama" value="{{ $kategori->nama }}">
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="control-label">Harga</label>
                                        <input type="text" class="form-control" name="harga"
                                            value="{{ $kategori->harga }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="control-label">Foto</label>
                                        <input type="text" class="form-control" name="foto"
                                            value="{{ $kategori->foto }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="control-label">expired</label>
                                        <input type="date" class="form-control" name="expired"
                                            value="{{ $kategori->expired }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="control-label">Deskripsi</label>
                                        <textarea name="deskripsi" class="form-control">{{ $kategori->deskripsi }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-warning float-right"><i class="fa fa-save">simpan</i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>
