<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class edit_akun_fasilitatorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->session()->has('user')) {
            // Jika ada data pengguna dalam session, ambil informasi pengguna
            $user = $request->session()->get('user');
            return view('edit_akun_fasilitator', compact('user'));
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
    public function simpan_akun_fasilitator(Request $request)
    {
        $id = $request->id;
        // Lakukan pembaruan langsung pada entri yang ada
        User::where('id', $id)->update([
            'nama' => $request->nama,
            'nomor_telepon' => $request->nomor_telepon,
            'nama_usaha' => $request->nama_usaha,
            'alamat' => $request->alamat,
            'kecamatan' => $request->kecamatan,
            'kabupaten' => $request->kabupaten,
            'provinsi' => $request->provinsi,
            'username' => $request->username,
            'password' => $request->password,
        ]);
        
        // Flash session dan redirect ke rute yang ditentukan
        Session::flash('message', 'Data Berhasil Disimpan');
        $user = $request->user();
        return redirect()->route('akun_fasilitator', ['data' => $user->username]);
    }
}
