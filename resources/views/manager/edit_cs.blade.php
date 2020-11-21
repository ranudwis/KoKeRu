@extends('partial.dashboard_manager')

@section('content')
    <div class="card card-profil">
        <div class="card-header" style="font-weight: bold;">Nama</div>
        <div class="card-body">  
            <form method="post" action="">
                @csrf
                <table class="edit">
                    <tr>
                        <td>
                            <input type="text" class="form-control" name="nama" autofocus placeholder="Nama" value="">
                        </td>
                        <td style="margin-left: 20px">
                            <input type="text" class="form-control" name="password" placeholder="Password">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" class="form-control" name="email" placeholder="Email" value="">
                        </td>
                        <td>
                            <input type="text" class="form-control" name="ruang" placeholder="Ruang">
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
