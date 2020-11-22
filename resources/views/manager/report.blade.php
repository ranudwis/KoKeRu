@extends('partial.dashboard_manager')

@section('content')
    <form method="get" action="{{ url('manager/laporan') }}">
        @csrf

        <div class="form-group">
            <label for="date">Tanggal</label>
            <input
                class="form-control"
                id="date"
                type="date"
                name="date"
                value="{{ $reportDate->toDateString() }}"
            />
        </div>

        <div class="form-group">
            <label for="status">Status</label>

            <select class="form-control" id="status" name="status">
                <option value="semua" {{ $status == 'semua' ? 'selected' : '' }}>
                    Semua
                </option>
                <option value="belum" {{ $status == 'belum' ? 'selected' : '' }}>
                    Belum
                </option>
                <option value="sudah" {{ $status == 'sudah' ? 'selected' : '' }}>
                    Sudah
                </option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary mb-2">Tampil</button>
    </form>

    <div class="text-center mt-4">
        <h4>
            Laporan Harian Kebersihan dan Kerapihan Ruangan Gedung Bersama Maju<br />
            Hari {{ $reportDate->isoFormat('dddd') }}
            Tanggal {{ $reportDate->isoFormat('DD MMMM YYYY')}}
        </h4>
        <p>
            << Tanggal Cetak {{ $now->isoFormat('DD MMMM YYYY') }} Jam {{ $now->isoFormat('HH:mm') }} WIB >>
        </p>
    </div>

    <table class="table">
        <tr>
            <th>
                No
            </th>
            <th>
                Ruang
            </th>
            <th>
                Nama CS
            </th>
            <th>
                Status
            </th>
        </tr>

        @foreach ($rooms as $room)
            <tr>
                <td>
                    {{ $loop->iteration }}
                </td>
                <td>
                    {{ $room->nama }}
                </td>
                <td>
                    {{ $room->cs->nama }}
                </td>
                <td>
                    {{ $room->laporan_count == 0 ? 'Belum' : 'Sudah' }}
                </td>
            </tr>
        @endforeach
    </table>
@endsection
