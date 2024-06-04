<?php

namespace App\Http\Controllers;

use App\Models\sertifikasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class edit_pengajuan_sertifikasi_petani_kopiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->session()->has('user')) {
            // Jika ada data pengguna dalam session, ambil informasi pengguna
            $user = $request->session()->get('user');
            $id = $_GET['id'];
            $tampilkan = sertifikasi::where('id_sertifikasi', $id)->get();
            foreach ($tampilkan as $tampil) {
                $tampilkan = $tampil;
            }
            return view('edit_pengajuan_sertifikasi_petani_kopi', compact('user', 'tampilkan'));
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
    public function kirim_edit_pengajuan(Request $request)
    {
        $id = $request->id;

        // Memeriksa dan mengelola gambar
        if ($request->hasFile('gambar')) {
            $fileGambar = $request->file('gambar');
            $namaFileGambar = $fileGambar->getClientOriginalName(); // Mendapatkan nama file asli
            $pathGambar = $request->file('gambar')->storeAs('gambar_video', $namaFileGambar); // Menyimpan file dengan nama yang sama
        } else {
            // Jika tidak ada file gambar baru diunggah, gunakan nama file yang sudah ada
            $namaFileGambar = sertifikasi::findOrFail($id)->foto_produk;
        }
        
        // Memeriksa dan mengelola file
        if ($request->hasFile('file')) {
            $fileDokumen = $request->file('file');
            $namaFileDokumen = $fileDokumen->getClientOriginalName(); // Mendapatkan nama file asli
            $pathDokumen = $request->file('file')->storeAs('dokumen', $namaFileDokumen); // Menyimpan file dengan nama yang sama
        } else {
            // Jika tidak ada file dokumen baru diunggah, gunakan nama file yang sudah ada
            $namaFileDokumen = sertifikasi::findOrFail($id)->izin_usaha;
        }
        
        // Memeriksa dan mengelola video
        if ($request->hasFile('video')) {
            $fileVideo = $request->file('video');
            $namaFileVideo = $fileVideo->getClientOriginalName(); // Mendapatkan nama file asli
            $pathVideo = $request->file('video')->storeAs('video', $namaFileVideo); // Menyimpan file dengan nama yang sama
        } else {
            // Jika tidak ada file video baru diunggah, gunakan nama file yang sudah ada
            $namaFileVideo = sertifikasi::findOrFail($id)->video_proses_produk;
        }

        // Lakukan pembaruan langsung pada entri yang ada
        sertifikasi::where('id_sertifikasi', $id)->update([
            'nama_produk' => $request->nama_produk,
            'nama_petani' => $request->nama_petani,
            'id_fasilitator' => $request->nama_fasilitator,
            'izin_usaha' => $namaFileDokumen,
            'foto_produk' => $namaFileGambar,
            'video_proses_produk' => $namaFileVideo,
            'bahan_digunakan' => $request->bahan_digunakan,
            'alat_digunakan' => $request->alat_digunakan,
        ]);
        
        // Flash session dan redirect ke rute yang ditentukan
        Session::flash('message', 'Data Berhasil Disimpan');
        return redirect()->route('sertifikasi_petani');        
    }
}
