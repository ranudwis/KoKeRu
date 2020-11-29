@extends('partial.dashboard_manager')

@section('content')

<div class="container semua_ruang">
    <h1>Monitoring Kebersihan dan Kerapihan Ruang <br> Gedung Bersama Maju</h1>
    <h4>{{ $now->isoFormat('DD MMMM YYYY') }}</h4>

        @if ($errors->any())
        @foreach ($errors->all() as $e)
        <div>{{ $e }}</div>
        @endforeach
        @endif

    <div class="row flexing">
        @foreach ($ruang as $r)
            <div class="container ruang {{ $loop->index % 2 == 0 ? 'ruang_belum' : 'ruang_sudah' }}">
                <h1>{{ $r->nama }}</h1>
                <h2>Status : {{ $loop->index % 2 == 0 ? 'Belum' : 'Sudah' }}</h2>
                <h3>CS : {{ $r->cs->nama ?? '-' }}</h3>
                @if($loop->index % 2 == 1)
                    <a href="#">BUKTI</a>
                @else
                @endif 
            </div>
        @endforeach
</div>

@endsection