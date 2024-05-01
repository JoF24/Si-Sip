<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tampilkan;
use PhpParser\Node\Stmt\ElseIf_;

class pelatihan_pengolahan_kopiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->session()->has('user')) {
            // Jika ada data pengguna dalam session, ambil informasi pengguna
            $user = $request->session()->get('user');
            $tampilkan = tampilkan::where('kategori', 'Pengolahan Kopi')->get();
            $judul = $_GET['judul'];
            if($judul ==='kosong')
            return view('pelatihan_pengolahan_kopi', compact('user','tampilkan','judul'));
            else
            $tampil = tampilkan::where('judul', $judul)->first();
            return view('pelatihan_pengolahan_kopi', compact('user','tampilkan','judul','tampil'));
        }else {
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
}
