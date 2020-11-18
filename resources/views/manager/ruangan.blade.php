@extends('partial.dashboard_manager')

@section('content')

<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Nama</th>
            <th scope="col">Cleaning Service</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($ruang as $r)
        <tr>
            <td>{{ ruang()->nama }}</td>
            <td>{{ users()->cs->nama }}</td>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">
                    Edit
                </button>
                    <a href="{{ url('penulis/dashboard') }}" class="btn btn-danger">Hapus</a>
                </div>
        </tr>
    @endforeach
</table>
@endsection