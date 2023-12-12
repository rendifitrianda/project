<x-app>
    <div class="container ">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        Data Produk
                        <a href="{{ url('produk/create') }}" class="btn btn-info float-right"><i
                                class="fa fa-plus"></i>Tambah</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <th>No</th>
                                <th>Aksi</th>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Stok</th>
                            </thead>
                            <tbody>
                                @foreach ($list_produk as $produk)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <x-button.btn url="{{ url('produk/show', $produk->id) }}"
                                                    class="primary" icon="info" />
                                                <x-button.btn url="{{ url('produk/edit', $produk->id) }}"
                                                    class="warning" icon="edit" />
                                                <x-button.nontification id="{{ $produk->id }}" />
                                            </div>
                                        </td>
                                        <td>{{ $produk->nama }}</td>
                                        <td>{{ $produk->harga }}</td>
                                        <td>{{ $produk->stok }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>
