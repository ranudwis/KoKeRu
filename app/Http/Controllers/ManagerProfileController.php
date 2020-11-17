<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagerProfileController extends Controller
{
    public function index()
    {
        return view('manager.profile');
    }
}
