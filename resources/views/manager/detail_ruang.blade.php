@extends('partial.dashboard_manager')

@section('content')
<div class="row dashboard">
    <div class="col semua_ruang">

        <h1>Ruang R.301</h1>
        <h2>Cleaning Service : Bambang</h1>
            <h4>Hari Kamis, 10 November 2020</h4>

            <div class="container bukti">
                <div class="container tombol_back">
                    <a href="#">Kembali</a>
                </div>
                <h1>BUKTI FOTO/ VIDEO</h1>

                <div class="row gambar_bukti">
                    <img class="foto" src="{{ Storage::url('hotel.jpg') }}" alt="kamar">
                    <img class="foto" src="{{ Storage::url('hotel.jpg') }}" alt="kamar">
                    <img class="foto" src="{{ Storage::url('hotel.jpg') }}" alt="kamar">
                    <img class="foto" src="{{ Storage::url('hotel.jpg') }}" alt="kamar">
                    <img class="foto" src="{{ Storage::url('hotel.jpg') }}" alt="kamar">
                </div>
            </div>
    </div>
</div>
@endsection