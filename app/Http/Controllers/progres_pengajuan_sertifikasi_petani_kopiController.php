<?php

namespace App\Http\Controllers;

use App\Models\kemajuan;
use App\Models\progres;
use Illuminate\Http\Request;

class progres_pengajuan_sertifikasi_petani_kopiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->session()->has('user')) {
            // Jika ada data pengguna dalam session, ambil informasi pengguna
            $user = $request->session()->get('user');
            $id_progres = $_GET['id'];
            $progres = progres::where('id_progres', $id_progres)->get();
            foreach ($progres as $p) {
                $progres = $p;
            }
            $kemajuan = $progres->kemajuan;
            $kemajuan = explode(',', $kemajuan);
            $keterangan_kemajuan = kemajuan::all();
            return view('progres_pengajuan_sertifikasi_petani_kopi', compact('user','progres','kemajuan','keterangan_kemajuan'));
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
}
