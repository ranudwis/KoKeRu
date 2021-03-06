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
                        <td style="width: 40%">
                            <input type="text" class="form-control" name="nama" autofocus value="{{ $cleanings->nama }}">
                        </td>
                        <td rowspan="4">
                            <option value="select" style="margin-left: 20px">
                                Ruang Sekarang:
                                @foreach ($cleanings->ruang as $r)
                                    {{ $r->nama}},
                                @endforeach
                            </option>
                            <label style="margin-left: 20px">Pilih Ruang:</label>
                            <select name="ruang[]" multiple class="form-control" style="height: 110px;">
                                @foreach ($cleanings->ruang as $r)
                                    <option value="{{ $r->id }}" selected="">{{ $r->nama}}</option>
                                @endforeach
                                @foreach ($ruang as $r)
                                    <option value="{{ $r->id }}">{{ $r->nama }}</option>
                                @endforeach
                            </select>
                            <p style="margin-left: 20px;font-style: italic;font-size: 15px">"Untuk memilih atau menghapus ruangan tahan tombol ctrl dan klik ruangannya"</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" class="form-control" name="email"  value="{{ $cleanings->email }}">
                        </td>
                    </tr>
                    <tr>
                        <td style="margin-left: 20px">
                            <input type="password" class="form-control" name="password" placeholder="Password">
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
