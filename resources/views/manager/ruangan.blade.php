@extends('partial.dashboard_manager')

@section('content')

<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">No Ruang</th>
            <th scope="col">Nama CS</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($ruang as $r)
        <tr>
            <td>{{ $r->nama }}</td>
            <td>{{ $r->cs->nama }}</td>
            <td style="display: flex">
                <a href="/" class="btn btn-success">Edit</a>
                <form action="/" method="POST" style="margin-left:5px">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Hapus" class="btn btn-danger">
                </form>
            </td>
        </tr>
    @endforeach
</table>
@endsection