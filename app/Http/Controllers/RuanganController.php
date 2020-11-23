<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ruang;

class RuanganController extends Controller
{
    public function tampilRuangan() {
        $ruang = Ruang::all();

        return view('manager.ruangan', compact('ruang'));
    }

    public function tambahRuangan(Request $request) {
        $request->validate([
            'nama' => ['required'],
        ]);

        $ruang = new Ruang();
        $ruang->nama = $request->nama;
        $ruang->save();


        return back();
    }
}
