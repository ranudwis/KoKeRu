@extends('partial.dashboard_manager')

@section('content')
    <div class="card card-profil">
        <div class="card-header" style="font-weight: bold;">{{ $cleanings -> nama }}</div>
        <div class="card-body">  
            <form method="post" action="">
                @csrf
                <table class="edit">
                    <tr>
                        <td>
                            <input type="text" class="form-control" name="nama" autofocus value="{{ $cleanings->nama }}">
                        </td>
                        <td style="margin-left: 20px">
                            <input type="text" class="form-control" name="password">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" class="form-control" name="email"  value="{{ $cleanings->email }}">
                        </td>
                        <td>
                            <input type="text" class="form-control" name="ruang" {{-- value="{{ $ruang->nama }}" --}}>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <center>
                                <button type="submit" class="btn btn-primary btn-edit" name="submit" value="submit">Edit</button>
                            </center>
                        </td>
                    </tr>
                </table>
            </form>
        </div>  
    </div>
   
@endsection
