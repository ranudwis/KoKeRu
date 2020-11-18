<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('dandi/style.css') }}">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <title>Dashboard Admin</title>
</head>

<body>
    <header>
        <div class="judul">DASHBOARD <span>ADMIN</span></div>
        <a href="#" class="btn btn-primary btn-home">Home</a>
        <a href="#" class="btn btn-danger btn-logout">Logout</a>
    </header>
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
</body>

</html>