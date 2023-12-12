<x-app>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        Tambah Produk
                        <a href="{{ url('kategori/create') }}" class="btn btn-info float-right"><i
                                class="fa fa-plus"></i>Tambah</a>

                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <th>No</th>
                                <th>Aksi</th>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Foto</th>
                            </thead>
                            <tbody>
                                @foreach ($list_kategori as $kategori)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <x-button.btn url="{{ url('kategori/show', $kategori->id) }}"
                                                    class="primary" icon="info" />
                                                <x-button.btn url="{{ url('kategori/edit', $kategori->id) }}"
                                                    class="warning" icon="edit" />
                                                <x-button.nontification id="{{ $kategori->id }}" />
                                            </div>
                                        </td>
                                        <td>{{ $kategori->nama }}</td>
                                        <td>{{ $kategori->harga }}</td>
                                        <td>{{ $kategori->foto }}</td>

                                        <td>
                                            <img src="{{ $kategori->foto }}" alt="" style="width:100px">
                                        </td>
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
