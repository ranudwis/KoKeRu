@extends('partial.dashboard_manager')

@section('content')
    <div class="card card-profil">
        <div class="card-header" style="font-weight: bold;">
            <a href="/manager/cs"><i class="fas fa-arrow-left"></i></a>
            <i class="fas fa-plus"></i>Tambah Cleaning Service
        </div>
        <div class="card-body card-body-profil">  
            <form method="post" action="">
                @csrf
                <table class="edit">
                    <tr>
                        <td>
                            <input type="text" class="form-control" name="nama" autofocus placeholder="Nama">
                        </td>
                        <td style="margin-left: 20px">
                            <input type="text" class="form-control" name="password" placeholder="password">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" class="form-control" name="email"  placeholder="Email">
                        </td>
                        <td>
                            <select class="form-control" name="ruang">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                            {{-- @foreach ($ruang as $r)
                                <option value="{{ $r->id }}">{{ $r->nama }}</option>
                            @endforeach --}}
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <button type="submit" class="btn btn-primary btn-edit" name="submit" value="submit"><i class="fas fa-plus"></i>Tambah</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>  
    </div>
   
@endsection
