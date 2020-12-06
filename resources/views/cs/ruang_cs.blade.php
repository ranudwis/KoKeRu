@extends('partial.dashboard_cs')

@section('content')
<div class="container semua_ruang">
    <h1>Ruangan yang Harus Dibersihkan</h1>
    <h4>Hari Minggu</h3>

        @if ($errors->any())
            @foreach ($errors->all() as $e)
                <div>{{ $e }}</div>
            @endforeach
        @endif

        <div class="row flexing">

        @foreach ($ruang as $key => $r)
            <div class="container ruang {{ $loop->index % 2 == 0 ? 'ruang_belum' : 'ruang_sudah' }}">
                <h1>{{ $r->nama }}</h1>
                <h2>Status : {{ $loop->index % 2 == 0 ? 'Belum' : 'Sudah' }}</h2>
                <h3>CS : {{ $r->cs->nama }}</h3>
                <a href="/cs/upload/{{$r->id}}">UPLOAD</a>
            </div>
        @endforeach

    </div>
@endsection
