<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RuanganController extends Controller
{
    public function tampilRuangan() {
        return view('manager.ruangan');
    }
}
