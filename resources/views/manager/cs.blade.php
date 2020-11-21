@extends('partial.dashboard_manager')

@section('content')
    <form method="post" action="">
        @csrf
        <table style="margin-top: 20px">
            <tr>
                <td style="padding-left:50px;padding-bottom: 10px">
                    <button class="btn btn-primary" type="submit" style="border-radius: 2px;"><i class="fas fa-plus"></i> Tambah CS</button>
                </td>
            </tr>
        </table>
    </form>
    <h4 style="margin-left: 400px;margin-top:40px">DAFTAR CLEANING SERVICE</h4>
    <table class="table table-hover table-kategori">
        {{-- @foreach ($kategori as $k) --}}
        <tr class="tr-warna">
            <td style="width: 550px">nama CS</td>
           {{-- <td><a href="{{ url('/manager/editCS/' . $k->idkategori) }}"><i class="fas fa-pencil-alt"></i></a></td>
            <td><a href="{{ url('/admin/hapus_kategori/' . $k->idkategori) }}"><i class="fas fa-trash-alt"></i></a></td> --}}
            <td><a href=""><i class="fas fa-pencil-alt"></i></a></td>
            <td><a href=""><i class="fas fa-trash-alt"></i></a></td>
        </tr>
        {{-- @endforeach --}}
    </table>
   
@endsection
