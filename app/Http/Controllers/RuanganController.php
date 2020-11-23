<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ruang;

class RuanganController extends Controller
{
<<<<<<< HEAD
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
=======
    public function tampilRuangan()
    {
        $ruang = Ruang::all();
        return view('manager.ruangan', compact('ruang'));
>>>>>>> 58d21326b624894dcbddc4b812979a4452d7dfab
    }
}
