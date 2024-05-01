<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class loginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login');
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
    // public function actionlogin(Request $request)
    // {
    //     $request->validate([
    //         'username' =>'required',
    //         'password' =>'required',
    //     ]);
    //     // $data =[
    //     //     'username' =>$request->username,
    //     //     'password' =>$request->password
    //     // ];
    //     // dd(Auth::attempt($data));
    //     $username = $request->input('username');
    //     $password = $request->input('password');

    //     $user = User::where('username', $username)->first();

    //     // Jika user tidak ditemukan, kembalikan pesan error atau lakukan penanganan sesuai kebutuhan aplikasi Anda
    //     if (!$user) {
    //         dd('User dengan username ' . $username . ' tidak ditemukan.');
    //     }

    //     // Ambil password dari user yang ditemukan
    //     $userPassword = $user->password;

    //     // Hash password yang dimasukkan
    //     $hashedPassword = Hash::make($password);

    //     // Melakukan autentikasi dengan memeriksa password yang dimasukkan dengan password yang diambil dari database
    //     $attempt = $password === $userPassword;
    //     $cek = Auth::attempt([
    //         'username' => $user,
    //         'password' => $userPassword,
    //     ]);
    //     $pengguna = Auth::check();

    //     // Debugging
    //     dd([
    //         'username' => $username,
    //         'password' => $password,
    //         'userPassword' => $userPassword,
    //         'hashedPassword' => $hashedPassword,
    //         'attempt' => $attempt,
    //         'hasil' =>$cek,
    //         'pengguna' =>$pengguna
    //     ]);
    // }

    public function actionlogin(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        // Mencari pengguna berdasarkan username
        $user = DB::table('users')
                ->where('username', $username)
                ->first();
        $pengguna = User::where('username','=',$request->username)->first(); 
        // dd($user);2
        if ($user) {
            // Username ditemukan di database
            // Memeriksa apakah password sesuai dengan hash password di database
            if ($password === $user->password) {
                Auth::login($pengguna);
                $request->session()->put('user', $pengguna);
                return redirect('beranda_login');
                // return redirect('beranda_login');
            } else {
                // Password tidak cocok, tampilkan pesan kesalahan
                Session::flash('error', 'Password salah');
                return redirect()->route('login');
            }
        } else {
            // Username tidak ditemukan di database, tampilkan pesan kesalahan
            Session::flash('error', 'Username tidak ditemukan');
            return redirect()->route('login');
        }
    }

    public function actionlogout()
    {
        session()->forget('user');
        return redirect('beranda');
    }
}
