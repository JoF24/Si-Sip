<?php

namespace App\Http\Controllers;

use App\Models\promosi;
use Illuminate\Http\Request;

class detail_pengajuan_promosiController extends Controller
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
            $promosi = promosi::where('id_promosi', $id)->get();
            foreach ($promosi as $p) {
                $promosi = $p;
            }
            return view('detail_pengajuan_promosi', compact('user','promosi'));
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
    public function ubah_status_promosi(Request $request){
        $id_promosi = (int)$request->id_promosi;
        promosi::where('id_promosi', $id_promosi)->update([
            'status_validasi' => $request->status_validasi,
            'status_promosi' => $request->status_promosi
        ]);
        $user = $request->user();
        return redirect()->route('promosi_admin', ['data' => $user->username]);
    }
}
