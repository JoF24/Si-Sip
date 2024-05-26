<?php

namespace App\Http\Controllers;

use App\Models\promosi;
use App\Models\User;
use Illuminate\Http\Request;

class detail_promosiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->session()->has('user')) {
            // Jika ada data pengguna dalam session, ambil informasi pengguna
            $user = $request->session()->get('user');
            $id_promosi = $_GET['id_promosi'];
            $promosi = promosi::where('id_promosi', $id_promosi)->get();
            foreach ($promosi as $p) {
                $promosi = $p;
            }
            $alamat = User::where('nama_usaha', $promosi->nama_usaha)->get();
            foreach ($alamat as $a) {
                $alamat = $a;
            }
            return view('detail_promosi', compact('user','promosi','alamat'));
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
