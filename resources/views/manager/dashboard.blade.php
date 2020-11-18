@extends('partial.dashboard_manager')

@section('content')

<h1>Monitoring Kebersihan dan Kerapihan Ruang <br> Gedung Bersama Maju</h1>
<h4>Hari {[ ruang()->update_at }}</h3>

    @if ($errors->any())
        @foreach ($errors->all() as $e)
            <div>{{ $e }}</div>
        @endforeach
    @endif

    <div class="row flexing">
        <div class="container ruang ruang_sudah">
            <h1>{{ ruang()->nama }}</h1>
            <h2>Status : SUDAH</h2>
            <h3>{{ users()->nama }}</h3>
            <a href="#">{{ bukti()->bukti }}</a>
                @foreach ($ruang as $r)
                    <option value="{{ $r->id }}"></option>
                @endforeach
        </div>
                    <div class="container ruang ruang_belum">
                        <h1>R.302</h1>
                        <h2>Status : BELUM</h2>
                        <h3>CS : Bambang</h3>
                    </div>
                    <div class="container ruang ruang_sudah">
                        <h1>R.303</h1>
                        <h2>Status : SUDAH</h2>
                        <h3>CS : Bambang</h3>
                        <a href="#">BUKTI</a>
                    </div>
                    <div class="container ruang ruang_sudah">
                        <h1>R.304</h1>
                        <h2>Status : SUDAH</h2>
                        <h3>CS : Bambang</h3>
                        <a href="#">BUKTI</a>
                    </div>
                    <div class="container ruang ruang_belum">
                        <h1>R.305</h1>
                        <h2>Status : BELUM</h2>
                        <h3>CS : Bambang</h3>
                    </div>
                    <div class="container ruang ruang_sudah">
                        <h1>R.306</h1>
                        <h2>Status : SUDAH</h2>
                        <h3>CS : Bambang</h3>
                        <a href="#">BUKTI</a>
                    </div>
                    <div class="container ruang ruang_belum">
                        <h1>R.307</h1>
                        <h2>Status : BELUM</h2>
                        <h3>CS : Bambang</h3>
                    </div>
                    <div class="container ruang ruang_sudah">
                        <h1>R.308</h1>
                        <h2>Status : SUDAH</h2>
                        <h3>CS : Bambang</h3>
                        <a href="#">BUKTI</a>
                    </div>
                    <div class="container ruang ruang_belum">
                        <h1>R.309</h1>
                        <h2>Status : BELUM</h2>
                        <h3>CS : Bambang</h3>
                    </div>
                    <div class="container ruang ruang_sudah">
                        <h1>R.310</h1>
                        <h2>Status : SUDAH</h2>
                        <h3>CS : Bambang</h3>
                        <a href="#">BUKTI</a>
                    </div>
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        Create
                    </button>
                    <a href="{{ url('penulis/dashboard') }}" class="btn btn-danger">Cancel</a>
                </div>
                </div>
        </div>
    </div>
@endsection
