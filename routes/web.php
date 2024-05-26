<?php

use App\Http\Controllers\akun_adminController;
use App\Http\Controllers\akun_fasilitatorController;
use App\Http\Controllers\akun_petaniController;
use App\Http\Controllers\beranda_loginController;
use App\Http\Controllers\detail_pegajuan_sertifikasi_petani_kopiController;
use App\Http\Controllers\detail_pengajuan_sertifikasi_adminController;
use App\Http\Controllers\detail_pengajuan_sertifikasi_fasilitatorController;
use App\Http\Controllers\edit_akun_adminController;
use App\Http\Controllers\edit_akun_fasilitatorController;
use App\Http\Controllers\edit_akun_petaniController;
use App\Http\Controllers\edit_videoController;
use App\Http\Controllers\halaman_utamaController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\melihat_pelatihan_adminController;
use App\Http\Controllers\menambah_pengajuan_sertifikasi_petaniController;
use App\Http\Controllers\menambah_progres_pengajuan_sertifikasi_fasilitatorController;
use App\Http\Controllers\menambah_videoController;
use App\Http\Controllers\mengubah_informasi_pelatihanController;
use App\Http\Controllers\pelatihan_adminController;
use App\Http\Controllers\pelatihan_baristaController;
use App\Http\Controllers\pelatihan_budidaya_kopiController;
use App\Http\Controllers\pelatihan_kewirausahaanController;
use App\Http\Controllers\pelatihan_pemasaran_kopiController;
use App\Http\Controllers\pelatihan_pengolahan_kopiController;
use App\Http\Controllers\pelatihan_petaniController;
use App\Http\Controllers\progres_pengajuan_sertifikasi_adminController;
use App\Http\Controllers\progres_pengajuan_sertifikasi_fasilitatorController;
use App\Http\Controllers\progres_pengajuan_sertifikasi_petani_kopiController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\sertifikasi_adminController;
use App\Http\Controllers\sertifikasi_fasilitatorController;
use App\Http\Controllers\sertifikasi_petaniController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
#Landing Page
Route::get('/',[halaman_utamaController::class, 'index'])->name('/');
#Halaman Beranda
Route::get('beranda',[halaman_utamaController::class, 'index'])->name('beranda');
Route::get('beranda_login',[beranda_loginController::class, 'index'])->name('beranda_login');
#Fitur Login
Route::get('login',[loginController::class,  'index'])->name('login');
Route::post('actionlogin',[loginController::class, 'actionlogin'])->name('actionlogin');
Route::get('actionlogout',[loginController::class, 'actionlogout'])->name('actionlogout');
#Fitur Refistrasi
Route::get('registrasi',[registerController::class, 'index'])->name('registrasi');
Route::post('registrasi/action',[registerController::class, 'actionregistrasi'])->name('actionregistrasi');
#Fitur Pelatihan Petani
Route::get('pelatihan',[pelatihan_petaniController::class, 'index'])->name('pelatihan');
Route::get('pelatihan_petani',[pelatihan_petaniController::class, 'index'])->name('pelatihan_petani');
Route::get('pelatihan_budidaya_kopi',[pelatihan_budidaya_kopiController::class, 'index'])->name('pelatihan_budidaya_kopi');
Route::get('pelatihan_pengolahan_kopi',[pelatihan_pengolahan_kopiController::class, 'index'])->name('pelatihan_pengolahan_kopi');
Route::get('pelatihan_pemasaran_kopi',[pelatihan_pemasaran_kopiController::class, 'index'])->name('pelatihan_pemasaran_kopi');
Route::get('pelatihan_barista',[pelatihan_baristaController::class, 'index'])->name('pelatihan_barista');
Route::get('pelatihan_kewirausahaan',[pelatihan_kewirausahaanController::class, 'index'])->name("pelatihan_kewirausahaan");
Route::get('pelatihan_admin',[pelatihan_adminController::class, 'index'])->name('pelatihan_admin');
#Fitur Informasi Pelatihan
Route::get('mengubah_informasi_pelatihan',[mengubah_informasi_pelatihanController::class, 'index'])->name('mengubah_informasi_pelatihan');
Route::put('simpan_informasi',[mengubah_informasi_pelatihanController::class, 'simpan'])->name('simpan_informasi');
#Fitur Video Pelatihan
Route::get('menambah_video',[menambah_videoController::class, 'index'])->name('menambah_video');
Route::post('actiontambah',[menambah_videoController::class, 'actiontambah'])->name('actiontambah');
Route::get('edit_video',[edit_videoController::class, 'index'])->name('edit_video');
#Fitur Pelatihan Admin
Route::get('melihat_pelatihan_admin',[melihat_pelatihan_adminController::class, 'index'])->name('melihat_pelatihan_admin');
Route::post('simpan_video',[edit_videoController::class, 'simpan_video'])->name('simpan_video');
#Fitur Akun Petani
Route::get('akun_petani', [akun_petaniController::class, 'index'])->name('akun_petani');
Route::get('edit_akun_petani', [edit_akun_petaniController::class, 'index'])->name('edit_akun_petani');
Route::post('simpan_akun_petani', [edit_akun_petaniController::class, 'simpan_akun_petani'])->name('simpan_akun_petani');
#Fitur Akun Fasilitator
Route::get('akun_fasilitator', [akun_fasilitatorController::class, 'index'])->name('akun_fasilitator');
Route::get('edit_akun_fasilitator', [edit_akun_fasilitatorController::class, 'index'])->name('edit_akun_fasilitator');
Route::post('simpan_akun_fasilitator', [edit_akun_fasilitatorController::class, 'simpan_akun_fasilitator'])->name('simpan_akun_fasilitator');
#Fitur Akun Admin
Route::get('akun_admin', [akun_adminController::class, 'index'])->name('akun_admin');
Route::get('edit_akun_admin', [edit_akun_adminController::class, 'index'])->name('edit_akun_admin');
Route::post('simpan_akun_admin', [edit_akun_adminController::class, 'simpan_akun_admin'])->name('simpan_akun_admin');
#Fitur Sertifikasi Petani
Route::get('sertifikasi_petani', [sertifikasi_petaniController::class, 'index'])->name('sertifikasi');
Route::get('tambah_pengajuan', [menambah_pengajuan_sertifikasi_petaniController::class, 'index'])->name('tambah_pengajuan');
Route::post('kirim_pengajuan', [menambah_pengajuan_sertifikasi_petaniController::class, 'kirim_pengajuan'])->name('kirim_pengajuan');
Route::get('detail_pengajuan_sertifikasi_petani_kopi', [detail_pegajuan_sertifikasi_petani_kopiController::class, 'index'])->name('detail_pengajuan_sertifikasi_petani_kopi');
Route::get('progres_pengajuan_sertifikasi_petani_kopi', [progres_pengajuan_sertifikasi_petani_kopiController::class, 'index'])->name('progres_pengajuan_sertifikasi_petani_kopi');
#Fitur Sertifikasi Admin
Route::get('sertifikasi_admin', [sertifikasi_adminController::class, 'index'])->name('sertifikasi_admin');
Route::get('detail_pengajuan_sertifikasi_admin', [detail_pengajuan_sertifikasi_adminController::class, 'index'])->name('detail_pengajuan_sertifikasi_admin');
Route::get('progres_pengajuan_sertifikasi_admin', [progres_pengajuan_sertifikasi_adminController::class, 'index'])->name('progres_pengajuan_sertifikasi_admin');
#Fitur Sertifikasi Fasilitator
Route::get('sertifikasi_fasilitator', [sertifikasi_fasilitatorController::class, 'index'])->name('sertifikasi_fasilitator');
Route::get('detail_pengajuan_sertifikasi_fasilitator', [detail_pengajuan_sertifikasi_fasilitatorController::class, 'index'])->name('detail_pengajuan_sertifikasi_fasilitator');
Route::post('ubah_status_pengajuan_sertifikasi', [detail_pengajuan_sertifikasi_fasilitatorController::class, 'ubah_status_pengajuan_sertifikasi'])->name('ubah_status_pengajuan_sertifikasi');
Route::get('progres_pengajuan_sertifikasi_fasilitator', [progres_pengajuan_sertifikasi_fasilitatorController::class, 'index'])->name('progres_pengajuan_sertifikasi_fasilitator');
Route::get('menambah_progres_pengajuan_sertifikasi_fasilitator',[menambah_progres_pengajuan_sertifikasi_fasilitatorController::class, 'index'])->name('menambah_progres_pengajuan_sertifikasi_fasilitator');
Route::post('tambah_progres_pengajuan_sertifikasi_fasilitator', [menambah_progres_pengajuan_sertifikasi_fasilitatorController::class, 'tambah_progres_pengajuan_sertifikasi_fasilitator'])->name('tambah_progres_pengajuan_sertifikasi_fasilitator');