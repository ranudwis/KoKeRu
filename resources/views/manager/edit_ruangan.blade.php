@extends('partial.dashboard_manager')

@section('content')

<div class="login-form">
    <form action="" method="post">
        <h2 class="text-center">{{ $ruang -> nama }}</h2>

        <div class="form-group">
            @csrf
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-user"></span>
                    </span>                    
                </div>
                <input type="text" class="form-control" name="nama" autofocus value="{{ $ruang->nama }}">
            </div>
        </div>     
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-edit" name="edit" value="submit"><i class="fas fa-plus"></i>Edit</button>
        </div>
</div>
@endsection