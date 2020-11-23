<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ruang;

class DashboardManagerController extends Controller
{
<<<<<<< HEAD
    public function tampilDashboardManager() {
        
        return view('manager.dashboard');

    // public function tampilDashboardManager() {
    //     $ruang = Ruang::all();

    //     return view('manager.dashboard', compact('ruang'));
    // }

=======
>>>>>>> 58d21326b624894dcbddc4b812979a4452d7dfab
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
