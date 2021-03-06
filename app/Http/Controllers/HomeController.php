<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ruang;
use Carbon\Carbon;
use App\Models\Laporan;

class HomeController extends Controller
{
    public function home()
    {
        $now = new Carbon();

        $ruang = Ruang::with('cs')
            ->with([
                'laporan' => function ($query) use ($now) {
                    $query->whereDate('created_at', $now);
                }
            ])
            ->get();

        return view('home', compact('ruang', 'now'));
    }
}
