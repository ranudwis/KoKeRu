<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ruang;
use Carbon\Carbon;

class DashboardManagerController extends Controller
{
    public function tampilDashboardManager()
    {
        $ruang = Ruang::all();
        $now = new Carbon();

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
