<?php

namespace App\Http\controllers;

use Illuminate\Http\request;
use App\Models\Dataku;
use Illuminate\Support\Facades\DB;

class SiteController extends controller
{
    public function beranda()
    {
        return view('site.beranda');//lokasi file resource/views/beranda.php
    }
    public function tentang()
    {
        $dataku = new Dataku();
        $dt = $dataku->semuaData();
        $nama_prodi = 'Sistem Informasi';
        $universitas = 'Universitas Tanjungpura';
        $kajur = 'Ilhamsyah';

        return view('site.tentang', compact('nama_prodi', 'universitas','kajur'));

        return view('site.tentang');
    }
    public function kontak()
    {
        return view('site.kontak');
    }
    public function layanan()
    {
        $list_layanan = [
            'Pendidikan dan Pengajaran',
            'Bakti pada Masyarakat',
            'Penelitian',
            'Pengembangan Aplikasi',
            'Analisis Data'
        ];
    return view('site.layanan', compact('list_layanan'));

    }
    public function percontohan()
    {
        $dataku = new Dataku();
        $dt = $dataku->semuaData();
        return view('site.percontohan',compact('dt'));
        return view ('site.percontohan');

    }

    public function tampilLayananRaw()
    {
        $layanan = DB::select('select * from layanan');
        return view('site.tampil_layanan_raw',compact('layanan'));
    }
    
    public function listDosen($tahun)
    {
        echo "ini adalah halaman list dosen" . $tahun;
    }
    public function cobaForm()
    {
        return view('site.coba_form');
    }
    public function prosesForm(Request $request)
    {
        $nama = $request->nama;
        //return view ('site.proses_form', compact('request'));
        return redirect()->route('kontak');
    }
       
    
}

?>