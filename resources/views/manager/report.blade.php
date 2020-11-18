@extends('partial.dashboard_manager')

@section('content')
    <form method="get" action="{{ url('manager/laporan') }}">
        @csrf

        <div class="form-group">
            <label for="date">Tanggal</label>
            <input class="form-control" id="date" type="date" name="date" />
        </div>

        <div class="form-group">
            <label for="status">Status</label>

            <select class="form-control" id="status" name="status">
                <option value="semua">
                    Semua
                </option>
                <option value="belum">
                    Belum
                </option>
                <option value="sudah">
                    Sudah
                </option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary mb-2">Tampil</button>
    </form>
@endsection
