@extends('partial.dashboard_manager')

@section('content')
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
</script>

<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-4">
                        <h2>Detail <b>Ruangan</b></h2>
                    </div>
                    <div class="col-sm-8">
                        <a href="{{ url('/manager/tambah_ruangan/') }}"><button class="btn btn-secondary btn-tambahRuang" type="submit"><i class="fas fa-plus"></i>Tambah Ruangan Baru</button></a>
                    </div>
                </div>
            </div>
            @csrf
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>                       
                        <th>Cleaning Service</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ruang as $r)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $r->nama }}</td>                        
                        <td>{{ $r->cs->nama ?? '-' }}</td>
                        <td>
                            <a href="{{ url('/manager/edit_ruangan/' . $r->id) }}" title="Edit" data-toggle="tooltip"><i class="fas fa-edit"></i></a>
                            <a href="{{ url('/manager/hapus_ruangan/' .$r->id) }}" title="Delete" data-toggle="tooltip"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>     
@endsection

