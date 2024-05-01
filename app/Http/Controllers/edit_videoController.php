<?php

namespace App\Http\Controllers;

use App\Models\edit_video;
use Illuminate\Http\Request;
use App\Models\tampilkan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class edit_videoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->session()->has('user')) {
            // Jika ada data pengguna dalam session, ambil informasi pengguna
            $user = $request->session()->get('user');
            $judul = $_GET['judul'];
            $tampil = tampilkan::where('judul', $judul)->first();
            return view('edit_video', compact('user','tampil'));
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
    public function simpan_video(Request $request)
    {
        $id = $request->id;

        // Periksa apakah file gambar baru diunggah
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $namaFile = $file->getClientOriginalName(); // Mendapatkan nama file asli
            $path = $request->file('gambar')->storeAs('gambar_video', $namaFile); // Menyimpan file dengan nama yang sama
        } else {
            // Jika tidak ada file gambar baru diunggah, gunakan nama file yang sudah ada
            $namaFile = edit_video::findOrFail($id)->gambar;
        }
        if ($request->status === 'Non Aktif'){
            $waktuSaatIni = DB::select("SELECT NOW() AS waktu_sekarang")[0]->waktu_sekarang;
            $tanggal_nonaktif = $waktuSaatIni;
        }
        else{
            $tanggal_nonaktif = $request->tanggal_nonaktif;
        }

        // Lakukan pembaruan langsung pada entri yang ada
        edit_video::where('id', $id)->update([
            'video' => $request->video,
            'gambar' => $namaFile, // Gunakan nama file baru atau yang sudah ada
            'status' => $request->status,
            'judul' => $request->judul,
            'deskripsi_video' => $request->deskripsi,
            'kategori' => $request->kategori,
            'tanggal_upload' => $request->tanggal_aktif,
            'tanggal_nonaktif' => $tanggal_nonaktif,
        ]);
        
        // Flash session dan redirect ke rute yang ditentukan
        session::flash('message', 'Data Berhasil Disimpan');
        return redirect()->route('pelatihan_admin');        
    }
}
