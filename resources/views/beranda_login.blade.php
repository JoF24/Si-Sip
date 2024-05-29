<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="gambar/Logo SI-SIP.png" type="image/x-icon">
    <title>Sistem Informasi Sertifikasi dan Pelatihan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .gambar-tombol-login{
            width: 190px;
            height: 53px;
            background-image: url("gambar/Button (1).png");
            background-size: cover;
            border: none;   
        }
        .gambar-tombol-lihat{
            width: 190px;
            height: 53px;
            background-image: url("gambar/Button (2).png");
            background-size: cover;
            border: none;   
        }
        .gambar-tombol-selengkapnya{
            width: 190px;
            height: 53px;
            background-image: url("gambar/Button (3).png");
            background-size: cover;
            border: none;
        }
        .navbar-font{
            font-family: interface;
            font-size: medium;
        }
        .judul-font{
            font-family: Playfair Display;
            font-size: large;
        }
        .kotak-button{
            background-image: url("gambar/Rectangle 1473.png");
            width: 100px;
            height: 30px;
        }
        .warna-footer{
            background-color: #282A3A;
            color: white;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-white sticky-top" >
        <div class="container-fluid">
            <img src="gambar/logo.jpg" width="150px" height="50px">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav px-5 nav-underline">
                    <li class="nav-item px-3">
                        <a class="nav-link active navbar-font" aria-current="page" href="beranda_login">Halaman Utama</a>
                    </li>
                    <li class="nav-item px-3">
                        @if ($user->role == 'Petani' || $user->role === 'Fasilitator')
                            <a class="nav-link navbar-font" href="pelatihan_petani">Pelatihan</a>
                        @elseif ($user->role == 'Admin')
                            <a class="nav-link navbar-font" href="pelatihan_admin">Pelatihan</a>
                        @endif
                    </li>
                    <li class="nav-item px-3">
                        @if ($user->role == 'Petani')
                            <a class="nav-link navbar-font" href="sertifikasi_petani">Sertifikasi</a>
                        @elseif($user->role == 'Fasilitator')
                        <a class="nav-link navbar-font" href="sertifikasi_fasilitator">Sertifikasi</a>
                        @elseif ($user->role == 'Admin')
                        <a class="nav-link navbar-font" href="sertifikasi_admin">Sertifikasi</a>
                        @endif
                    </li>
                    <li class="nav-item px-3">
                        @if ($user->role == 'Petani')
                            <a class="nav-link navbar-font" href="promosi_petani_kopi">Promosi</a>
                        @elseif($user->role == 'Fasilitator')
                        <a class="nav-link navbar-font" href="promosi_fasilitator">Promosi</a>
                        @elseif ($user->role == 'Admin')
                        <a class="nav-link navbar-font" href="promosi_admin">Promosi</a>
                        @endif
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user"></i> <span class="text-dark">{{ isset($user) ? $user->nama : 'Guest' }}</span> <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a>Peran: {{ $user->role }}</a></li>
                            <li role="separator" class="divider"></li>
                            <li>
                                @if ($user->role == 'Petani')
                                    <a href="{{ url('akun_petani') . '?data=' . $user->username }}">Akun</a>
                                @elseif ($user->role == 'Admin')
                                    <a href="{{url("akun_admin").'?data=' . $user->username}}">Akun</a>
                                @elseif ($user->role == 'Fasilitator')
                                    <a href="{{ url('akun_fasilitator') . '?data=' . $user->username }}">Akun</a>
                                @endif
                            </li>
                            <li><a href="{{ route('actionlogout') }}"><i class="fa fa-power-off"></i> Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>            
        </div>
    </nav>
    <div class="d-flex justify-content-center align-items-center judul-font" style="height: 125px;">
        <h2>SISTEM INFORMASI SERTIFIKASI & PELATIHAN</h2>
    </div>
    <div class="d-flex justify-content-center align-items-center" style="height: 100px;">
        <p>SI-SIP bekerja sama dengan sekolah kopi RAISA. SI-SIP merupakan sebuah Sistem Informasi Sertifikasi <br> dan Pelatihan untuk menghubungkan petani kopi dan fasilitator Legalitas serta menyediakan promosi.</p>
    </div>
    <div class="d-flex justify-content-center align-items-center flex-direction:column" style="height: 550px">
        <img src="gambar/Frame 48095571.png" width="1100px" height="400px">
    </div>
    <div class="d-flex justify-content-center align-items-center" style="height: 100px;">
        <div class="card" style="border-top:none;border-bottom: 1px solid #000;border-left:none;border-right:none;width:65rem"></div>
    </div>
    <div class="d-flex justify-content-center">...</div>
    <div class="d-flex justify-content-center judul-font">
        <h1>Pelatihan</h1>
    </div>
    <div class="d-flex justify-content-center judul-font align-items-center mt-4" style="height: auto">
        <div class="d-flex justify-content-center text-center" style="width: 900px">
            @foreach ($informasi_pelatihan as $informasi)
                {{ $informasi->informasi }}
            @endforeach
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center judul-font mt-5" style="height: auto;">
        <div class="row">
            <div class="col-md-4 md-3 mb-sm-0">
                <div class="card" style="width:300px;height:640px">
                    <a href="{{ $user->role === 'Petani'||$user->role === 'Fasilitator' ? url('/pelatihan_budidaya_kopi').'?judul=kosong' : 'pelatihan_admin' }}" style="text-decoration:none; color:inherit">
                        <div class="d-flex justify-content-center align-items-center" style="width: 300px;height: 300px">
                            <img src="gambar/Budidaya.png" alt="" style="width:270px">
                        </div>
                        <div class="card-body">
                            <h2 class="card-title">Budidaya Kopi</h2>
                            <p class="card-title" style="color:darkgrey;">Budidaya kopi adalah proses penanaman dan perawatan tanaman kopi untuk menghasilkan biji kopi yang berkualitas. Yang nantinya berpengaruh pada sebuah biji kopi</p>
                        </div>
                    </a>                    
                </div>
            </div>
            <div class="col-md-4 md-3 mb-sm-0">
                <div class="card" style="width:300px;height:640px">
                    <a href="{{ $user->role === 'Petani' || $user->role === 'Fasilitator' ? url('/pelatihan_pengolahan_kopi').'?judul=kosong' : 'pelatihan_admin' }}" style="text-decoration:none; color:inherit">
                        <div class="d-flex justify-content-center align-items-center" style="width: 300px;height:300px">
                            <img src="gambar/Pengolahan.png" alt="" style="width: 270px">
                        </div>
                        <div class="card-body">
                            <h2 class="card-title">Pengolahan Kopi</h2>
                            <p class="card-title" style="color: darkgrey;">Pengolahan kopi adalah proses mengolah biji kopi mentah menjadi biji kopi siap saji yang dapat digunakan untuk menyeduh minuman kopi. Proses ini mencakup beberapa tahap utama dan penting untuk proses selanjutnya.</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 md-3 mb-sm-0">
                <div class="card" style="width: 300px;height:640px">
                    <a href="{{ $user->role === 'Petani' || $user->role === 'Fasilitator' ? url('/pelatihan_pemasaran_kopi').'?judul=kosong' : 'pelatihan_admin' }}" style="text-decoration:none; color:inherit">
                        <div class="d-flex justify-content-center align-items-center" style="width:300px; height:300px">
                            <img src="gambar/Pemasaran.png" alt="" style="width:270px">
                        </div>
                        <div class="card-body">
                            <h2 class="card-title">Barista</h2>
                            <p class="card-title" style="color: darkgrey;">Barista adalah seorang profesional yang terlatih dalam meracik dan menyajikan berbagai jenis minuman kopi. Mereka bekerja di kafe, kedai kopi, atau restoran, dan memiliki pengetahuan mendalam tentang berbagai jenis biji kopi, teknik penyeduhan, serta cara penggunaan mesin espresso.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center mt-4" style="height: 100px">
        @if ($user->role == 'Petani'||$user->role == 'Fasilitator')
            <a class="btn gambar-tombol-lihat" href="pelatihan_petani"></a>
        @elseif ($user->role == 'Admin')
            <a class="btn gambar-tombol-lihat" href="pelatihan_admin"></a>
        @endif
    </div>
    <div class="d-flex justify-content-center align-items-center" style="height: 100px;">
        <div class="card" style="border-top:none;border-bottom: 1px solid #000;border-left:none;border-right:none;width:65rem"></div>
    </div>
    <div class="d-flex justify-content-center">...</div>
    <div class="d-flex justify-content-center judul-font" style="height: 100px;">
        <h1>Sertifikasi</h1>
    </div>
    <div class="d-flex justify-content-center">
        <div class="row">
            <div class="col-6 mb-3" style="width: 500px;">
                <p>Sertifikasi produk adalah kegiatan penilaian kesesuaian suatu produk terhadap persyaratan yang ditentukan dalam Standar Nasional Indonesia (SNI) melalui serangkaian kegiatan audit, pengujian, dan/atau inspeksi.</p>
                <a class="btn gambar-tombol-selengkapnya" role="button" href="sertifikasi_petani"></a>
            </div>
            <div class="col-6 mb-3">
                <div class="d-flex justify-content-center">
                    <img src="gambar/Sertifikasi.png" alt="sertifikasi" width="400px" height="300px">
                </div>
            </div>
        </div>
    </div>   
    <div class="d-flex justify-content-center align-items-center" style="height: 100px;">
        <div class="card" style="border-top:none;border-bottom: 1px solid #000;border-left:none;border-right:none;width:65rem"></div>
    </div> 
    <div class="d-flex justify-content-center">...</div>
    <div class="d-flex justify-content-center judul-font" style="height: 40px;">
        <h1>Promosi</h1>
    </div>
    <div class="d-flex justify-content-center align-items-center judul-font" style="height: 450px;">
        <div class="row">
            <div class="col-6 mb-3" style="width: 400px;">
                <p>Temukan berbagai macam produk unggulan dengan harga terbaik hanya di SI-SIP. Kami menyediakan beragam pilihan barang berkualitas tinggi untuk memenuhi segala kebutuhan Anda. kami siap memberikan penawaran istimewa yang tak boleh Anda lewatkan.</p>
                <a class="btn gambar-tombol-selengkapnya" role="button" href="promosi_petani_kopi"></a>
            </div>
            <div class="col-6 mb-3">
                <div class="d-flex justify-content-center" style="margin-left: 50px">
                    <img src="gambar/promosi.png" alt="sertifikasi" width="400px" height="300px">
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center flex-direction:column judul-font warna-footer" style="height: 120px;">
        <div class="row">
            <div class="col-3 mb-3">
                <div class="card warna-footer" style="width:px;border-top:none;border-bottom:none;border-left:none;border-right:none;">
                    <div class="d-flex justify-content-center align-items-center">
                        <img src="gambar/Frame 28.png" alt="logo" width="250px" height="80px">
                    </div>
                </div>
            </div>
            <div class="col-9 mb-3">
                <div class="card warna-footer" style="width:600px;border-top:none;border-bottom:none;border-left:none;border-right:none;">
                    <div class="card-body">
                        <div class="d-flex justify-content-center align-items-center" style="height:50px">
                            <p class="card-title">
                                © 2024 Sistem Informasi Sertifikasi & Pelatihan
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>