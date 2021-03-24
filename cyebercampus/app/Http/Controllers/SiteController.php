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
        return view('site.tentang');
    }
    public function kontak()
    {
        return view('site.kontak');
    }
    public function layanan()
    {
        return view('site.layanan');
    }
}

?>