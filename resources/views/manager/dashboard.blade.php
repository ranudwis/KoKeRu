@extends('partial.dashboard_manager')

@section('content')

<div class="container semua_ruang">
    <h1>Monitoring Kebersihan dan Kerapihan Ruang <br> Gedung Bersama Maju</h1>
    <h4>
        Hari {{ $now->isoFormat('dddd') }}, 
        Tanggal {{ $now->isoFormat('DD MMMM YYYY') }}
    </h4>

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

@endsection
