<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ruang;

class HomeController extends Controller
{
    public function home()
    {
        $ruang = Ruang::all();

        return view('home', compact('ruang'));
    }
}
