<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ruang;

class DashboardManagerController extends Controller
{
    public function tampilDashboardManager()
    {
        $ruang = Ruang::all();

        return view('manager.dashboard', compact('ruang'));
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
