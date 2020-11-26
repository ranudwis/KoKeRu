@extends('partial.dashboard_manager')

@section('content')
    <form method="post" action="/manager/tampil_cs">
        @csrf
        <table style="margin-top: 20px">
            <tr>
                <td style="padding-left:50px;padding-bottom: 10px">
                    <button class="btn btn-primary btn-tambahCS" type="submit" style="border-radius: 2px;"><i class="fas fa-plus"></i> Tambah Cleaning Service</button>
                </td>
            </tr>
        </table>
    </form>
    <center>
        <h4>DAFTAR CLEANING SERVICE</h4>
        <table class="table table-hover table-kategori">
            @foreach ($cleanings as $cs)
                @foreach ($cs->ruang as $ruang)
                <tr class="tr-warna">
                    <td style="width: 250px">{{ $cs->nama }}</td>
                    <td style="width: 230px;">{{ $ruang->nama }}</td>
                    <td><a href="{{ url('/manager/edit_cs/' . $cs->id) }}"><i class="fas fa-pencil-alt"></i></a></td>
                    <td><a href="{{ url('/manager/hapus_cs/' . $cs->id) }}" onclick="return konfirmasi()" id="pesan"><i class="fas fa-trash-alt"></i></a></td>
                </tr>
                 @endforeach
            @endforeach
        </table>
    </center> 

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
