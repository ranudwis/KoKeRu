<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ruang;

class DashboardCsController extends Controller
{
    public function ruanganCS()
    {
        $ruang = Ruang::all();
        return view('cs.ruang_cs', compact('ruang'));
    }
}
