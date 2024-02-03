@inject('timeService', 'App\Services\TimeServices')
<x-app>
    <div class="container ">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        <div class="float-right">
                            jam :{{ $timeService->showTimeNow() }}
                        </div>
                        Filter
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/produk/filter') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="" class="control-label">Nama</label>
                                <input type="text" class="form-control" name="nama" value="{{ $nama ?? '' }}">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">stok</label>
                                <input type="text" class="form-control" name="stok" value="{{ $stok ?? '' }}">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Harga Min</label>
                                        <input type="text" class="form-control" name="harga_min"
                                            value="{{ $harga_min ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Harga Max</label>
                                        <input type="text" class="form-control" name="harga_max"
                                            value="{{ $harga_max ?? '' }}">
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-dark float-right"><i class="fa search"></i>Filter</button>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        Data Produk
                        <a href="{{ url('admin/produk/create') }}" class="btn btn-info float-right"><i
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
                                                <x-button.btn url="{{ url('admin/produk/show', $produk->id) }}"
                                                    class="primary" icon="info" />
                                                <x-button.btn url="{{ url('admin/produk/edit', $produk->id) }}"
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
