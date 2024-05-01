<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\informasi_pelatihan;
use Illuminate\Support\Facades\Session;
use PhpParser\Node\Expr\FuncCall;

class mengubah_informasi_pelatihanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->session()->has('user')) {
            // Jika ada data pengguna dalam session, ambil informasi pengguna
            $user = $request->session()->get('user');
            $informasi_pelatihan = informasi_pelatihan::all();
            return view('mengubah_informasi_pelatihan', compact('user','informasi_pelatihan'));
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
    public function simpan(Request $request,informasi_pelatihan $informasi_pelatihan)
    {
        $request->validate([
            'informasi' => 'required',
            // tambahkan validasi lainnya sesuai kebutuhan
        ]);
        // $informasi_pelatihan->delete();
        // $informasi_pelatihan->informasi = $request->informasi;

        // // Simpan perubahan ke database
        // $informasi_pelatihan->save();
        informasi_pelatihan::truncate();

        // Membuat dan menyimpan data baru
        informasi_pelatihan::create([
            'informasi' => $request->informasi,
        ]);
        session::flash('message', 'Data Berhasil Disimpan');
        return redirect()->route('pelatihan_admin');
    }
}
