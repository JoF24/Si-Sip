<?php

namespace App\Http\Controllers;

use App\Models\promosi;
use Illuminate\Http\Request;

class menambah_promosi_petani_kopiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->session()->has('user')) {
            // Jika ada data pengguna dalam session, ambil informasi pengguna
            $user = $request->session()->get('user');
            return view('menambah_promosi_petani_kopi', compact('user'));
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
    public function kirim_pengajuan_promosi(Request $request){
        $foto_produk = $request->file('foto_produk');
        $namaFoto = $foto_produk->getClientOriginalName(); // Mendapatkan nama file asli
        $request->file('foto_produk')->storeAs(
            'promosi', $namaFoto  // Menyimpan file dengan nama yang sama
        );
        promosi::create([
            'nama_usaha' => $request->nama_usaha,
            'nomor_telepon' => $request->nomor_telepon,
            'nama_produk' => $request->nama_produk,
            'foto_produk' => $namaFoto,
            'deskripsi_produk' => $request->deskripsi_produk,
            'harga' => $request->harga
        ]);
        return redirect('promosi_petani_kopi');
    }
}
