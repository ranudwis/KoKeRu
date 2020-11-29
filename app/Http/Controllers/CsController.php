<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Ruang;

class CsController extends Controller
{
    public function tampilCS()
    {
        $cleanings = User::where('tipe_akun', 'cs')->get();
        return view('manager.cs', compact('cleanings'));
    }

    public function tampileditCS($id)
    {
        $cleanings = User::find($id);
        $ruang = Ruang::whereDoesntHave('cs')->get();
        return view('manager.edit_cs', compact('cleanings','ruang'));
    }

    public function editCS(Request $request, $id)
    {
        $request->validate([
        'nama' => ['required', 'max:30'],
        'email' => ['required','email'],
        'password'=> ['nullable'],
        // 'ruang'=>['required'],
        ]);

        $cleanings = User::find($id);
        $cleanings->nama =$request->nama;
        $cleanings->email =$request->email;
        $cs = $request->nama;
        if ($request->password) {
            $cleanings->password = Hash::make($request->password);
         }
        $cleanings->ruang()->update([
          'user_id' => null
        ]);
        Ruang::whereIn('id', $request->ruang)->update([
          'user_id' => $cleanings->id
        ]);

        $cleanings->save();
        return redirect('/manager/cs');
    }

    public function hapusCS($id) {
        $cleanings = User::find($id);
        if ($cleanings) {
            $cleanings->delete();
        }

        return redirect('/manager/cs');
    }

    public function tampiltambahCS(Request $request)
    {
        return view('manager.tambah_cs');
    }

}
