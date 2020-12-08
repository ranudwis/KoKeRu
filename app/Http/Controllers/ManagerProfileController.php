<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ManagerProfileController extends Controller
{
    public function index()
    {
    	$manager = auth()->user();
        return view('manager.profile', compact('manager'));
    }

    public function editProfil(Request $request)
    {
        $request->validate([
            'nama' => ['required', 'max:30'],
            'email' => ['required','email'],
            'password'=> ['required','confirmed'],
        ]);

        $manager = auth()->user();
        $manager->nama =$request->nama;
        $manager->email =$request->email;
        if (Hash::check($request->password_lama, auth()->user()->password)) {
            $manager->password = $request->password;
        }

        $manager->save();
        return redirect('/manager/dashboard');
    }
}
