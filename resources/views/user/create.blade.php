<x-app>
    <div class="container ">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        Tambah Data user
                    </div>
                    <div class="card-body">
                        <x-notifmessages />
                        <form action="{{ url('admin/user') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="" class="control-label">Nama</label>
                                <input type="text" class="form-control" name="nama">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Email</label>
                                <input type="email" class="form-control" name="email">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Password</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">No handphone</label>
                                <input type="text" class="form-control" name="no_handphone">
                            </div>
                            <button class="btn btn-warning float-right"><i class="fa fa-save">Simpan</i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>
