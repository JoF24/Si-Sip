<?php

namespace App\Http\Controllers;

use App\Models\sertifikasi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Session;

class detail_pengajuan_sertifikasi_fasilitatorController extends Controller
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
            $petani = User::where('nama', $tampilkan->nama_petani)->get();
            foreach ($petani as $p) {
                $petani = $p;
            }
            return view('detail_pengajuan_sertifikasi_fasilitator', compact('user', 'tampilkan','petani'));
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
    public function ubah_status_pengajuan_sertifikasi(Request $request){
        $id = $request->id_sertifikasi;
        // Lakukan pembaruan langsung pada entri yang ada
        sertifikasi::where('id_sertifikasi', $id)->update([
            'id_status'=>$request->status,
        ]);
        
        // Flash session dan redirect ke rute yang ditentukan
        Session::flash('message', 'Data Berhasil Divalidasi');
        $user = $request->user();
        return redirect()->route('sertifikasi_fasilitator', ['data' => $user->username]);
    }
}
