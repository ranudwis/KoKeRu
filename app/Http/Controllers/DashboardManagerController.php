<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardManagerController extends Controller
{
    public function tampilDashboardManager() {
        $ruang = Ruang::all();
        
        return view('manager.dashboard', compact('ruang'));
    }
}
