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
        $ruang = auth()->user()
            ->ruang()
            ->withCount([
                'laporan' => function ($query) {
                    $query->whereDate('created_at', new \DateTime());
                }
            ])
            ->get();



        return view('cs.ruang_cs', compact('ruang'));
    }

    public function showCS($id)
    {
        $ruang = Ruang::find($id);

        $laporan = $ruang->laporan()->with('bukti')->whereDate('created_at', new \DateTime())->first();

        return view('cs.upload', compact('ruang', 'laporan'));
    }

    public function storeCS(Request $request, $id)
    {
        $request->validate([
            'gambar.*' => ['required', 'image'],
        ]);

        $ruang = Ruang::find($id);

        if ($ruang->laporan()->whereDate('created_at', new \DateTime())->get()->isEmpty()) {
            $laporan = new Laporan();
            $laporan->user_id = auth()->id();
            $ruang->laporan()->save($laporan);
        } else {
            $laporan = $ruang->laporan()->whereDate('created_at', new \DateTime())->first();
        }

        foreach ($request->gambar as $gambar) {
            $bukti = new Bukti();
            $bukti->bukti = $gambar->store('public/bukti');

            $laporan->bukti()->save($bukti);
        }

        return back();
    }
}
