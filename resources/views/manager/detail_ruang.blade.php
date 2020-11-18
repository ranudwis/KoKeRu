@extends('partial.dashboard_manager')

@section('content')
    <div class="row dashboard">
        <div class="col menu">
            <div class="container">
                <center>
                    <h4>Dandi Arimansyah</h4>
                </center>
                <a href="#" class="active"><i class="fas fa-desktop"></i>Dashboard</a>
                <a href="#"><i class="fas fa-book"></i>Data Kategori</a>
                <a href="#"><i class="fas fa-pencil-alt"></i>Data Penulis</a>
                <a href="#"><i class="fas fa-user-edit"></i>Edit Profil</a>
            </div>
        </div>
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
                        <img class="{{ Storage::url(hotel.jpg) }}" src="hotel.jpg" alt="kamar">
                        <img class="{{ Storage::url(hotel.jpg) }}" src="hotel.jpg" alt="kamar">
                        <img class="{{ Storage::url(hotel.jpg) }}" src="hotel.jpg" alt="kamar">
                        <img class="{{ Storage::url(hotel.jpg) }}" src="hotel.jpg" alt="kamar">
                        <img class="{{ Storage::url(hotel.jpg) }}" src="hotel.jpg" alt="kamar">
                    </div>
                </div>
            </div>
        </div>
@endsection
