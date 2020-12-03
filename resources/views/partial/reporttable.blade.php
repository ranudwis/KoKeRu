<div class="text-center mt-4">
    <h4>
        Laporan Harian Kebersihan dan Kerapihan Ruangan Gedung Bersama Maju<br />
        Hari {{ $reportDate->isoFormat('dddd') }}
        Tanggal {{ $reportDate->isoFormat('DD MMMM YYYY') }}
    </h4>
    <p>
        &lt;&lt; Tanggal Cetak {{ $now->isoFormat('DD MMMM YYYY') }} Jam {{ $now->isoFormat('HH:mm') }} WIB &gt;&gt;
    </p>
</div>

<table class="table">
    <tr>
        <th>
            No
        </th>
        <th>
            Ruang
        </th>
        <th>
            Nama CS
        </th>
        <th>
            Status
        </th>
    </tr>

    @foreach ($rooms as $room)
        <tr>
            <td>
                {{ $loop->iteration }}
            </td>
            <td>
                {{ $room->nama }}
            </td>
            <td>
                {{ $room->cs->nama ?? '-' }}
            </td>
            <td>
                {{ $room->laporan_count == 0 ? 'Belum' : 'Sudah' }}
            </td>
        </tr>
    @endforeach
</table>
