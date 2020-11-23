@extends('partial.dashboard_manager')

@section('content')
    <form method="POST" action="{{ url('manager/profile') }}">
        @csrf

        <div class="form-group">
            <label for="nama">Nama</label>
            <input id="nama" class="form-control" type="text" name="nama" autofocus />
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" class="form-control" type="email" name="email" />
        </div>

        <p class="h5">
            Ganti Password
        </p>

        <div class="form-group">
            <label for="oldpassword">Password Lama</label>
            <input id="oldpassword" class="form-control" type="password" name="old_password" />
        </div>
        <div class="form-group">
            <label for="newpassword">Password Baru</label>
            <input id="newpassword" class="form-control" type="password" name="password" />
        </div>
        <div class="form-group">
            <label for="newconfirmedpassword">Konfirmasi Password Baru</label>
            <input id="newconfirmedpassword" class="form-control" type="password" name="password_confirmed" />
        </div>
        <button class="btn btn-primary" type="submit">Simpan</button>
    </form>
@endsection
