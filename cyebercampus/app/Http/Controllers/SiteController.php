<?php

namespace App\Http\controllers;

use Illuminate\Http\request;

class SiteController extends controller
{
    public function beranda()
    {
        return view('beranda');//lokasi file resource/views/beranda.php
    }
    public function tentang()
    {
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
    
    public function listDosen($tahun)
    {
        echo "ini adalah halaman list dosen" . $tahun;
    }
       
    
}

?>