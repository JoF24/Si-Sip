<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\menambah_video;
use Illuminate\Support\Facades\Storage;

class menambah_videoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->session()->has('user')) {
            // Jika ada data pengguna dalam session, ambil informasi pengguna
            $user = $request->session()->get('user');
            return view('menambah_video', compact('user'));
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
    public function actiontambah(Request $request)
    {

        // Mengubah judul menjadi for// Generate unique filename using timestamp
        // $fileContent = $request->gambar;
        // $namaFile = $request->judul;
        // // Save the image with the generated filename
        // $lokasiSimpan = 'public\gambar' . $namaFile;
        // file_put_contents($lokasiSimpan, $fileContent);
        // $image = $request->gambar;
        // $imageName = $request->judul;
        // Storage::disk('local')->put('gambar_video/' . $imageName, file_get_contents($image));
    
        // Menyimpan gambar ke penyimpanan lokal
        // $image->move(public_path('gambar'), $imageName);
        $file = $request->file('gambar');
        $namaFile = $file->getClientOriginalName(); // Mendapatkan nama file asli
        
        $request->file('gambar')->storeAs(
            'gambar_video', $namaFile  // Menyimpan file dengan nama yang sama
        );
        menambah_video::create([
            'judul'=> $request->judul,
            'deskripsi_video'=> $request->deskripsi,
            'video'=> $request->video,
            'gambar'=> $namaFile,
            'kategori'=> $request->kategori,
        ]);
        session::flash('message', 'Data Berhasil Ditambahkan');
        return redirect('pelatihan_admin');
    }
}
