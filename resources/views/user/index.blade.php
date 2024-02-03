<x-app>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        Data User
                        <a href="{{ url('admin/user/create') }}" class="btn btn-info float-right"><i
                                class="fa fa-plus"></i>Tambah</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <th>No</th>
                                <th>Aksi</th>
                                <th>Nama</th>
                                <th>Produk</th>
                                <th>Email</th>
                            </thead>
                            <tbody>
                                @foreach ($list_user as $user)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <x-button.btn url="{{ url('admin/user/show', $user->id) }}"
                                                    class="primary" icon="info" />
                                                <x-button.btn url="{{ url('admin/user/edit', $user->id) }}"
                                                    class="warning" icon="edit" />
                                                <x-button.nontification id="{{ $user->id }}" />
                                            </div>
                                        </td>
                                        <td>{{ $user->nama }}</td>
                                        <td>{{ $user->produk_count }}</td>
                                        <td>{{ $user->email }}</td>
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
