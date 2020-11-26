<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ruang;
use App\Models\User;

class RuanganController extends Controller
{
    public function tampilRuangan() {
        $ruang = Ruang::all();

        return view('manager.ruangan', compact('ruang'));
    }

    public function tampiltambahRuangan()
    {

        return view('manager.tambah_ruangan');
    }

    public function tambahRuangan(Request $request) {
        $request->validate([
            'nama' => ['required'],
        ]);

        $ruang = new Ruang();
        $ruang->nama = $request->nama;
        $ruang->save();

        return redirect('/manager/ruangan');
    }

    public function editRuangan(Request $request, $id) {
        $request->validate([
            'nama' => ['required'],
        ]);

        $ruang = Ruang::find($id);
        $ruang->nama = $request->nama;

        $ruang->save();
        return redirect('/manager/ruangan');
    }

     public function tampileditRuangan($id)
    {
        $ruang = Ruang::find($id);


        return view('manager.edit_ruangan', compact('ruang'));
    }

     public function hapusRuangan($id) {
        $ruang = Ruang::find($id);
        if ($ruang) {
            $ruang->delete();
        }

        return redirect('/manager/ruangan');
    }
}
