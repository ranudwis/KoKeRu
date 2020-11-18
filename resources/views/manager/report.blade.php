<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form method="get" action="{{ url('manager/laporan') }}">
            @csrf

            <div class="form-group">
                <label for="date">Tanggal</label>
                <input id="date" type="date" name="date" />
            </div>

            <div class="form-group">
                <label for="status">Status</label>

                <select id="status" name="status">
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
    </body>
</html>
