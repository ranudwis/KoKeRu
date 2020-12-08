@extends('partial.dashboard_cs')

@section('content')
<div class="row dashboard">
    <div class="col semua_ruang">
        <div class="container tombol_back">
            <a href="/cs/dashboard">Kembali</a>
        </div>
        <h1>{{$ruang->nama}}</h1>
        <h4>
            Hari {{ $now->isoFormat('dddd') }},
            Tanggal {{ $now->isoFormat('DD MMMM YYYY') }}
        </h4>

        <div class="container bukti">
            <div class="container upload">
                <p>Tambah Foto/ Video</p>

                <form action="" method="POST"  enctype="multipart/form-data">
                    @csrf
                    <input type="file" accept="image/*" name="gambar[]" multiple>
                    <div class="form-group" style="margin-top: 10px">
                        <button type="submit" class="btn btn-primary">
                            Submit
                        </button>
                    </div>
                </form>
            </div>

            <div class="row gambar_bukti">
                @if ($laporan == null || $laporan->bukti->count() == 0)
                    <h1>Belum ada bukti</h1>
                @else
                    @foreach ($laporan->bukti as $l)
                        <div class="bukti_foto">
                            <img class="foto" src="{{ Storage::url($l->bukti) }}" alt="kamar">
                            <form action="" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Hapus" class="btn btn-danger btn-md">
                            </form>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
