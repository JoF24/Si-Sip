<?php

namespace App\Http\Controllers;

use App\Models\kemajuan;
use App\Models\progres;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class menambah_progres_pengajuan_sertifikasi_fasilitatorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->session()->has('user')) {
            // Jika ada data pengguna dalam session, ambil informasi pengguna
            $user = $request->session()->get('user');
            $keterangan_kemajuan = kemajuan::all();
            $id = $_GET['id'];
            $progres = progres::where('id_progres', $id)->get();
            foreach ($progres as $p) {
                $progres = $p;
            }
            return view('menambah_progres_pengajuan_sertifikasi_fasilitator', compact('user','keterangan_kemajuan','progres'));
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
    public function tambah_progres_pengajuan_sertifikasi_fasilitator(Request $request){
        $id_progres = (int)$request->id_progres;
        $id_kemajuan = (int)$request->id_kemajuan;
        $catatan = $request->catatan;
        $progres = progres::where('id_progres', $id_progres)->get();
        foreach ($progres as $p) {
            $progres = $p;
        }
        $kemajuan = $progres->kemajuan;
        $gabungan = $kemajuan . ',' . $id_kemajuan;
        $tanggal_saat_ini = date("d/m/Y");
        progres::where('id_progres', $id_progres)->update([
            $id_kemajuan => $tanggal_saat_ini,
            'kemajuan' => $gabungan,
            'catatan' => $catatan
        ]);
        Session::flash('message', 'Data Berhasil Diubah');
        $user = $request->user();
        return redirect()->route('sertifikasi_fasilitator', ['data' => $user->username]);
    }
}
