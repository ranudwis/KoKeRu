<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CsController extends Controller
{
    public function tampilCS() {
        return view('manager.cs');
    }
    public function tampileditCS(){
    	return view('manager.edit_cs');
    }
    // public function hapusCs() {
    // 	$kategori = Kategori::find($idkategori);
    // 	if ($kategori) {
    // 		$kategori->delete();
    // 	}

    // 	return redirect('/admin/data_kategori');
    // }
