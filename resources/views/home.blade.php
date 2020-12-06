<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('home.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <h1 style="padding-left:10px; color:blue; font-weight:bold">KoKeRu</h1>
            <span><h3 style="padding-left:20px; color:rgb(0, 140, 187)">Kontrol Kebersihan Ruangan</h3></span>
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item active">
                    <a href="/login" class="btn btn-primary btn-logout">Login</a>
                </li>
            </ul>
        </div>
    </nav>

<div class="semua_ruang">
    <h1>Monitoring Kebersihan dan Kerapihan Ruang <br> Gedung Bersama Maju</h1>
    <h4>
        Hari {{ $now->isoFormat('dddd') }}
        Tanggal {{ $now->isoFormat('DD MMMM YYYY') }}
    </h3>
        @if ($errors->any())
            @foreach ($errors->all() as $e)
                <div>{{ $e }}</div>
            @endforeach
        @endif

        <div class="row flexing">

        @foreach ($ruang as $r)
            <div class="container ruang {{ $r->getStatus() ? 'ruang_sudah' : 'ruang_belum' }}">
                <h1>{{ $r->nama }}</h1>
                <h2>Status : {{ $r->getStatusString() }}</h2>
                <h3>CS : {{ $r->cs->nama ?? '-' }}</h3>
                @if($r->getStatus())
                    <a href="#">BUKTI</a>
                @endif

            </div>
        @endforeach
</div>
</body>
</html>
