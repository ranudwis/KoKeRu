<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ruang;
use Carbon\Carbon;

class DashboardManagerController extends Controller
{
    public function tampilDashboardManager()
    {
        $now = new Carbon();

        $ruang = Ruang::with('cs')
            ->withCount([
                'laporan' => function ($query) use ($now) {
                    $query->whereDate('created_at', $now);
                }
            ])
            ->get();

        return view('manager.dashboard', compact('ruang','now'));
    }

    // public function tampilDashboardManager()
    // {
    //     return view('manager.dashboard');
    // }

    public function tampilDetailRuang()
    {
        return view('manager.detail_ruang');

    }
}
