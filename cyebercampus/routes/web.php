<?php

use App\Http\controllers\SiteController;
use App\Http\controllers\LayananController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/tentang',[SiteController::class,'tentang']);

Route::get('/kontak',[SiteController::class,'kontak']);

Route::get('/layanan',[SiteController::class,'layanan']);

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/',[SiteController::class,'beranda'])->name('beranda');
Route::get('/tentang',[SiteController::class,'tentang']);
Route::get('/percontohan',[SiteController::class,'percontohan']);
Route::get('/site/kontak',[SiteController::class,'kontak'])->name('kontak');
Route::get('/layanan',[SiteController::class,'layanan']);
Route::get('/listDosen/{tahun}',[SiteController::class,'listDosen']);
Route::get('/layanan-raw',[SiteController::class,'tampilLayananRaw']);
Route::get('/layanan/index',[LayananController::class,'index'])->name('layanan.index');
Route::get('/layanan/detail/{id}',[LayananController::class,'detail'])->name('layanan.detail');
Route::post('/layanan/tambah',[LayananController::class,'tambah'])->name('layanan.tambah');
Route::get('/layanan/formubah/{id}',[LayananController::class,'formUbah'])->name('layanan.formubah');
Route::post('/layanan/ubah/{id}',[LayananController::class,'ubah'])->name('layanan.ubah');
Route::get('/layanan/hapus/{id}',[LayananController::class,'hapus'])->name('layanan.hapus');
Route::get('/layanan/formtambah',[LayananController::class,'formTambah'])->name('layanan.formtambah');
Route::get('/cobaform',[SiteController::class,'cobaForm'])->name('cobaform');
Route::post('/prosesform',[SiteController::class,'prosesForm'])->name('prosesfrom');