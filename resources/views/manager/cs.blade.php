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
                        <h2>Detail <b>Cleaning Service</b></h2>
                    </div>
                    <div class="col-sm-8">
                        <a href="{{ url('/manager/tambah_cs') }}" class="btn btn-secondary"><i class="fas fa-plus"></i> Tambah Cleaning Service</a>
                    </div>
                </div>
            </div>
            @csrf
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Nama</th>                       
                        <th>Ruang</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($cleanings as $cs)
                    <tr>
                        <td style="width: 250px">{{ $cs->nama }}</td>
                        <td style="width: 230px;">
                          @foreach ($cs->ruang as $ruang)
                            {{ $ruang->nama }}<br>
                          @endforeach
                        </td>
                        <td>
                          <a href="{{ url('/manager/edit_cs/' . $cs->id) }}" data-toggle="tooltip"><i class="fas fa-pencil-alt"></i></a>
                          <a href="{{ url('/manager/hapus_cs/' . $cs->id) }}" data-toggle="tooltip" onclick="return konfirmasi()" id="pesan"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>     
   <script>
      function konfirmasi(){
         var tanya = confirm("Apakah Anda Yakin Akan Menghapus Data Cleaning Service ini?");
 
         if(tanya === true) {
            return true;
         }else{
            return false;
         }
 
         document.getElementById("pesan");
      }
    </script>
   
@endsection
