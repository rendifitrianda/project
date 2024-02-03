<x-app>
    <div class="container ">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        Detail Data user
                    </div>

                    <div class="card-body">
                        <dl>
                            <dt>Nama</dt>
                            <dd>{{ '@' . $user->nama }}</dd>
                            <dt>Alamat Email</dt>
                            <dd>{{ $user->email }}</dd>
                            <dd>No Handphone : {{ $user->detail->no_handphone }}</dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>
