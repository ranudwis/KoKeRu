<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $emailPassword = $request->only('email', 'password');

        if (auth()->attempt($emailPassword)) {
            if (auth()->user()->tipe_akun == "cs") {
                return redirect()->intended('/cs/dashboard');
            }
            else if (auth()->user()->tipe_akun == "manager") {
                return redirect()->intended('/manager/dashboard');
            }

        }

        return back();
    }
}
