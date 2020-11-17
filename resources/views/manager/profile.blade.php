<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form method="POST" action="{{ url('manager/profile') }}">
            @csrf

            <input type="text" name="nama" placeholder="Nama" /><br />

            <input type="text" name="email" placeholder="Email" /><br />

            ganti password<br />

            <input type="password" name="old_password" placeholder="Password Lama" /><br />
            <input type="password" name="password" placeholder="Password baru" /><br />
            <input type="password" name="password_confirmed" placeholder="Ulangi Password" /><br />

            <button type="submit">Simpan</button>
        </form>
    </body>
</html>
