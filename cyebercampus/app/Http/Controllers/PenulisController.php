<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penulis;

class PenulisController extends Controller
{
    public function index()
    {
        $layanan = Penulis::all();
        return view('penulis.index',compact('penulis'));

    }

    public function detail($id)
    {
        $layanan = Penulis::find($id);
        return view('penulis.detail',compact('penulis'));
    }

    public function tambah(Request $request)
    {
        $penulis = new Penulis();
        $penulis-> nama_penulis = $request->nama_layanan;
        $penulis-> save();
        return redirect()->route('penulis.index');
    }
}
