<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardManagerController extends Controller
{
<<<<<<< HEAD
    public function tampilDashboardManager() {
        
        return view('manager.dashboard');
=======
    // public function tampilDashboardManager() {
    //     $ruang = Ruang::all();

    //     return view('manager.dashboard', compact('ruang'));
    // }

    public function tampilDashboardManager()
    {
        return view('manager.dashboard');
    }

    public function tampilDetailRuang()
    {
        return view('manager.detail_ruang');
>>>>>>> e0f5e68133fbb6207725b8c49a6bf13c53e240d3
    }
}
