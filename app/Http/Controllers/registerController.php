<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class registerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('register');
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
    public function actionregistrasi(Request $request)
    {
        if ($request->password !== $request->konfirmasi_password) {
            session::flash('error', 'Password dan Konfirmasi Password tidak cocok.');
            return redirect('registrasi');
        }
        
        $user = User::create([
            'nama' => $request->nama,
            'nomor_telepon' => $request->nomor_telepon,
            'alamat' => $request->alamat,
            'nama_usaha' => $request->nama_usaha,
            'kecamatan' => $request->kecamatan,
            'kabupaten' => $request->kabupaten,
            'provinsi' => $request->provinsi,
            'username' => $request->username,
            'password' => $request->password,
        ]);
        session::flash('message', 'Registrasi Berhasil. Akun Anda Sudah Aktif Silahkan Login');
        return redirect('login');
    }
}
