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

    <div class="mt-4">
        <p class="text-right">
            <a
                href="{{
                    url("manager/laporan/pdf?date={$reportDate}&status={$status}")
                }}"
                class="btn btn-primary"
            >
                <i class="far fa-file-pdf"></i>
                Cetak
            </a>
        </p>

        @include('partial.reporttable')
    </div>
@endsection
