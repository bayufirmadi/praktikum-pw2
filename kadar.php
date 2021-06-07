<?php
$tgl_now=date("Y-m-d"); //tanggal sekarang
$tgl_dibuat="2021-01-01"; // tanggal dibuat aplikasi
$masa_berlaku = strtotime('+30 days', strtotime($tgl_dibuat)); // jangka waktu + 30 hari atau sebulan
$tgl_exp=date("Y-m-d",$masa_berlaku); //tanggal expired atau kadaluarsa
if ($tgl_now >=$tgl_exp ) 
{
 echo"<center><h1>Mohon Maaf Web Expired</h1>
 <h3>Silahkan Hubungi Admin<h3></center>";
}
else
{
?>
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;

class layananController extends Controller
{
    public function index()
    {
        $layanan = Layanan::all();
        return view('layanan.index',compact('layanan'));

    }
    public function detail($id)
    {
        $layanan = Layanan::find($id);
        return view('layanan.detail',compact('layanan'));
    }

    public function formTambah()
    {
        return view('layanan.form_tambah');
    }
    public function tambah(Request $request)
    {
        $layanan = new Layanan();
        $layanan-> nama_layanan = $request->nama_layanan;
        $layanan-> deskripsi_layanan = $request->deskripsi_layanan;
        $layanan-> save();
        return redirect()->route('layanan.index');
    }

    public function formUbah()
    {
        $layanan = Layanan::find($id);
        return view('layanan.formubah',compact('layanan'));
    }
    public function ubah($id)
    {
        echo 'Pengubahan berhasil';
        $layanan = Layanan::find($id);
        $layanan->nama_layanan = 'Penelitian dan Pengembangan';
        $layanan->deskripsi_layanan = 'Kita melakukan Penelitian dan pengembangan di desa pelosok';
        $layanan->save(); 
    }
    public function hapus($id)
    {
        $layanan = Layanan::find($id);
        $layanan->delete(); 
        echo 'sudah terhapus';
    }
}

?>