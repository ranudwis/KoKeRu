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
            <div class="container ruang {{ $r->getStatus() ? 'ruang_sudah' : 'ruang_belum' }}">
                <h1>{{ $r->nama }}</h1>
                <h2>Status : {{ $r->getStatusString() }}</h2>
                <h3>CS : {{ $r->cs->nama }}</h3>

                @if ($r->getStatus())
                    <a href="/cs/upload/{{ $r->id }}">UPLOAD</a>
                @else
                    <a href="/cs/upload/{{ $r->id }}">LIHAT</a>
                @endif
            </div>
        @endforeach

    </div>
@endsection
