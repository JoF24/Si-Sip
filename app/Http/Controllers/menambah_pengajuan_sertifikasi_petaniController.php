<?php

namespace App\Http\Controllers;

use App\Models\progres;
use App\Models\sertifikasi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class menambah_pengajuan_sertifikasi_petaniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->session()->has('user')) {
            // Jika ada data pengguna dalam session, ambil informasi pengguna
            $user = $request->session()->get('user');
            $fasilitator = User::where('role', 'Fasilitator')->where('provinsi', $user->provinsi)->get(); 
            foreach ($fasilitator as $f) {
                $fasilitator = $f;
            }
            return view('menambah_pengajuan_sertifikasi_petani', compact('user', 'fasilitator'));
        } else {
            // Jika tidak ada data pengguna dalam session, redirect ke halaman login
            return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu.');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function kirim_pengajuan(Request $request){
        $izin_usaha = $request->file('izin_usaha');
        $namaFile = $izin_usaha->getClientOriginalName(); // Mendapatkan nama file asli
        $request->file('izin_usaha')->storeAs(
            'izin_usaha', $namaFile  // Menyimpan file dengan nama yang sama
        );
        $foto_produk = $request->file('foto_produk');
        $namaFoto = $foto_produk->getClientOriginalName(); // Mendapatkan nama file asli
        $request->file('foto_produk')->storeAs(
            'foto_produk', $namaFoto  // Menyimpan file dengan nama yang sama
        );
        $video_produk = $request->file('video_produk');
        $namaVideo = $video_produk->getClientOriginalName(); // Mendapatkan nama file asli
        $request->file('video_produk')->storeAs(
            'video_produk', $namaVideo  // Menyimpan file dengan nama yang sama
        );  
        $status = 'Ditinjau';
        sertifikasi::create([
            'nama_produk' => $request->nama_produk,
            'nama_petani' => $request->nama_petani,
            'id_fasilitator' => $request->nama_fasilitator,
            'izin_usaha' => $namaFile,
            'foto_produk' => $namaFoto,
            'video_proses_produk' => $namaVideo,
            'bahan_digunakan' => $request->bahan_digunakan,
            'alat_digunakan' => $request->alat_digunakan,
            'id_status' => $status
        ]);
        $tanggal_saat_ini = date("d/m/Y");
        progres::create([
            'kemajuan' => 1,
            'tanggal_submit' => $tanggal_saat_ini,
        ]);
        Session::flash('message', 'Data Berhasil Ditambahkan');
        return redirect('sertifikasi_petani');
    }
}
