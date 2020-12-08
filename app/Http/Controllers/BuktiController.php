<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ruang;

class BuktiController extends Controller
{
    public function buktiRuang(Ruang $ruang)
    {
        $laporan = $ruang->laporan()
            ->whereDate('created_at', new \DateTime())
            ->first();

        $bukti = $laporan->bukti ?? collect([]);

        return view('bukti', compact('bukti'));
    }
}
