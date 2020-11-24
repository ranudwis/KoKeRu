@extends('partial.dashboard_manager')

@section('content')
    <div class="card card-profil">
        <div class="card-header" style="font-weight: bold;">
            <a href="/manager/cs"><i class="fas fa-arrow-left"></i></a>
            {{ $cleanings -> nama }}
        </div>
        <div class="card-body card-body-profil">  
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
                            <select name="ruang" multiple>
                               {{-- @foreach ($ruang as $r)
                                    <option value="{{ $r->id }}">{{ $r->nama }}</option>
                                @endforeach --}}
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <button type="submit" class="btn btn-primary btn-edit" name="submit" value="submit">Edit</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>  
    </div>
   
@endsection
