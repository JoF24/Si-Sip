<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="gambar/Logo SI-SIP.png" type="image/x-icon">
    <title>Pelatihan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar-font{
            font-family: interface;
            font-size: medium;
        }
        .judul-font{
            font-family: Playfair Display;
            font-size: large;
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
                <ul class="navbar-nav ml-auto px-5 nav-underline">
                    <li class="nav-item px-3">
                        <a class="nav-link navbar-font" href="beranda_login">Halaman Utama</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link active navbar-font" aria-current="page" href="pelatihan_petani">Pelatihan</a>
                    </li>
                    <li class="nav-item px-3">
                        @if ($user->role == "Petani")
                        <a class="nav-link navbar-font" href="sertifikasi_petani">Sertifikasi</a>    
                        @elseif ($user->role == "Fasilitator")
                        <a class="nav-link navbar-font" href="sertifikasi_fasilitator">Sertifikasi</a>
                        @endif
                    </li>
                    <li class="nav-item px-3">
                        @if ($user->role == "Petani")
                        <a class="nav-link navbar-font" href="promosi_petani_kopi">Promosi</a>    
                        @elseif ($user->role == "Fasilitator")
                        <a class="nav-link navbar-font" href="promosi_fasilitator">Promosi</a>
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
                            @if ($user->role == 'Petani')
                            <li><a href="{{ url('akun_petani') . '?data=' . $user->username }}" style="color:black">Akun</a></li>
                            @elseif($user->role == 'Fasilitator')
                            <li><a href="{{ url('akun_fasilitator') . '?data=' . $user->username }}" style="color:black">Akun</a></li>
                            @endif
                            <li><a href="{{ route('actionlogout') }}" style="color:red"><i class="fa fa-power-off"></i> Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>            
        </div>
    </nav>
    <div class="d-flex justify-content-center align-items-end judul-font" style="height: 100px;">
        <h1>Pelatihan</h1>
    </div>
    <div class="d-flex justify-content-center align-items-center text-center mt-4" style="height: 50px">
        <div class="d-flex justify-content-center text-center" style="width: 900px">
            @foreach ($informasi_pelatihan as $informasi)
                {{ $informasi->informasi }}
            @endforeach
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center judul-font mt-4 mb-5" style="height: 600px;">
        <div class="row">
            <div class="col-md-4 md-3 mb-sm-0">
                <a href="{{ url('/pelatihan_budidaya_kopi') }}?judul=kosong" style="text-decoration:none; color:inherit">
                    <div class="card" style="width:300px; height:580px">
                        <div class="d-flex justify-content-center align-items-center" style="width: 300px;height: 300px">
                            <img src="gambar/Budidaya.png" alt="" style="width:270px">
                        </div>
                        <div class="card-body">
                            <h2 class="card-title">Budidaya Kopi</h2>
                            <p class="card-title" style="color:darkgrey;">Budidaya kopi adalah proses penanaman dan perawatan tanaman kopi untuk menghasilkan biji kopi yang berkualitas. Yang nantinya berpengaruh pada sebuah biji kopi</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 md-3 mb-sm-0">
                <a href="{{ url('/pelatihan_pengolahan_kopi') }}?judul=kosong" style="text-decoration:none; color:inherit">
                    <div class="card" style="width:300px;height:580px">
                        <div class="d-flex justify-content-center align-items-center" style="width: 300px;height:300px">
                            <img src="gambar/Pengolahan.png" alt="" style="width: 270px">
                        </div>
                        <div class="card-body">
                            <h2 class="card-title">Pengolahan Kopi</h2>
                            <p class="card-title" style="color: darkgrey;">Pengolahan kopi adalah proses mengolah biji kopi mentah menjadi biji kopi siap saji yang dapat digunakan untuk menyeduh minuman kopi. Proses ini mencakup beberapa tahap utama dan penting untuk proses selanjutnya.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 md-3 mb-sm-0">
                <a href="{{ url('/pelatihan_barista') }}?judul=kosong" style="text-decoration:none; color:inherit">
                    <div class="card" style="width: 300px;height:580px">
                        <div class="d-flex justify-content-center align-items-center" style="width:300px; height:300px">
                            <img src="gambar/Pemasaran.png" alt="" style="width:270px">
                        </div>
                        <div class="card-body">
                            <h2 class="card-title">Barista</h2>
                            <p class="card-title" style="color: darkgrey;">Barista adalah seorang profesional yang terlatih dalam meracik dan menyajikan berbagai jenis minuman kopi. Mereka bekerja di kafe, kedai kopi, atau restoran, dan memiliki pengetahuan mendalam tentang berbagai jenis biji kopi, teknik</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center flex-direction:column judul-font warna-footer" style="height: 100px;">
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