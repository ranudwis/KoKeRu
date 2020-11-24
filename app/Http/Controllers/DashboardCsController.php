<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ruang;
use App\Models\Bukti;
use App\Models\Laporan;

class DashboardCsController extends Controller
{
    public function ruanganCS()
    {
        $ruang = Ruang::all();
        return view('cs.ruang_cs', compact('ruang'));
    }

    // public function uploadCS($id)
    // {
    //     $ruang = Ruang::find($id);
    //     return view('cs.upload', compact('ruang'));
    // }

    public function uploadCS()
    {
        return view('cs.upload');
    }

    public function buktiCS(Request $request)
    {

        $request->validate([
            'gambar' => ['required', 'image'],
        ]);


        // $penulis = auth()->user()->penulis;

        $bukti = new Bukti();
        $bukti->bukti = $request->gambar->store('public/post');
        // $bukti->id_laporan = $request->laporan; -------
        $bukti->created_at = new \DateTime();
        $bukti->updated_at = new \DateTime();

        // $bukti->idpenulis = auth()->user()->penulis->idpenulis;
        $bukti->save();

        return redirect('cs/upload');
    }
}
