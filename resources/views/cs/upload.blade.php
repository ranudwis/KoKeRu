@extends('partial.dashboard_cs')

@section('content')
<div class="row dashboard">
    <div class="col semua_ruang">
        {{-- <div class="container tombol_back">
            <a href="#">Kembali</a>
        </div> --}}
        <h1>Ruang R.301</h1>
        <h4>Hari Kamis, 10 November 2020</h4>

        <div class="container bukti">
            <div class="container upload">
                <p>Tambah Foto/ Video</p>

                <form action="" method="POST"  enctype="multipart/form-data">
                    @csrf
                    <input type="file" accept="image/*" name="gambar">
                    <div class="form-group" style="margin-top: 10px">
                        <button type="submit" class="btn btn-primary">
                            Submit
                        </button>
                        <a href="{{ url('cs/upload') }}" class="btn btn-danger">Batal</a>
                    </div>
                </form>
            </div>

            <div class="row gambar_bukti">
                <div class="bukti_foto">
                    <img class="foto" src="{{ Storage::url('hotel.jpg') }}" alt="kamar">
                    <a href="#">Hapus Bukti</a>
                </div>
                <div class="bukti_foto">
                    <img class="foto" src="{{ Storage::url('hotel.jpg') }}" alt="kamar">
                    <a href="#">Hapus Bukti</a>
                </div>
                <div class="bukti_foto">
                    <img class="foto" src="{{ Storage::url('contoh_foto.jpeg') }}" alt="kamar">
                    <a href="#">Hapus Bukti</a>
                </div>
                <div class="bukti_foto">
                    <img class="foto" src="{{ Storage::url('hotel.jpg') }}" alt="kamar">
                    <a href="#">Hapus Bukti</a>
                </div>
                <div class="bukti_foto">
                    {{-- <img class="foto" src="{{ Storage::url('$p->bukti') }}" alt="kamar"> --}}
                    <a href="#">Hapus Bukti</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection