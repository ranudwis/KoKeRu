<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ruang;

class RuanganController extends Controller
{
    public function tampilRuangan()
    {
        $ruang = Ruang::all();
        return view('manager.ruangan', compact('ruang'));
    }
}
