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
        // $user = auth()->user();

        $ruang = Ruang::all();
        return view('cs.ruang_cs', compact('ruang'));
    }

    public function showCS($id)
    {
        $ruang = Ruang::find($id);
        // $bukti = Bukti::find($id);
        return view('cs.upload', compact('ruang'));
    }

    public function storeCS(Request $request, $id)
    {

        $request->validate([
            'gambar' => ['required', 'image'],
        ]);

        $ruang = Ruang::find($id);

        $bukti = new Bukti();
        $bukti->bukti = $request->gambar->store('public/post');
        $bukti->created_at = new \DateTime();
        $bukti->updated_at = new \DateTime();

        if ($ruang->laporan()->where('created_at', new \DateTime())->get()->isEmpty()) {
            $laporan = new Laporan();
            $laporan->user_id = auth()->id();
            $ruang->laporan()->save($laporan);
            $laporan->id;
            $laporan->bukti()->save($bukti);
        }

        $bukti->save();

        return back();
    }
}
