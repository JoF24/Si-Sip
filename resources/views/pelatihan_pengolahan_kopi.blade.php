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
        .video-gallery {
            display: flex;
            overflow-x: auto;
            scroll-behavior: smooth;
        }
        .video-card {
            flex: 0 0 auto;
            width: 300px;
            margin-right: 15px;
        }
        .video-thumbnail {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }
        .video-title {
            font-size: 16px;
            color: #333;
            margin-top: 5px;
        }
        .video-description {
            font-size: 14px;
            color: #666;
            height: 40px; /* Ensure consistent card height */
            overflow: hidden;
        }
        .video-gallery {
            display: flex;
            flex-direction: column;
            max-height: 400px;
            flex-wrap: nowrap; /* Menghindari pembungkus flex dan mendorong konten ke baris baru */
            overflow-x: hidden; /* Aktifkan overflow horizontal untuk mengaktifkan pengguliran */
            overflow-y: auto; /* Sembunyikan overflow vertikal, kita hanya ingin pengguliran horizontal */
            scroll-behavior: smooth;
            white-space: nowrap; /* Menghindari pemotongan teks */
        }
        
        .video-card {
            flex: 0 0 auto; /* Set lebar kartu video ke otomatis, tidak fleksibel */
            margin-right: 10px; /* Berikan margin antar kartu video */
        }
        
        .video-thumbnail {
            width: 100%; /* Atur lebar gambar agar sesuai dengan lebar kartu */
            height: auto; /* Biarkan ketinggian gambar mengikuti aspek rasio asli */
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
                        <a class="nav-link navbar-font" href="sertifikasi_petani">Sertifikasi</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link navbar-font" href="promosi_petani_kopi">Promosi</a>
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
                            <li><a href="{{ url('akun_petani') . '?data=' . $user->username }}">Akun</a></li>
                            <li><a href="{{ route('actionlogout') }}"><i class="fa fa-power-off"></i> Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>            
        </div>
    </nav>
    <div class="d-flex justify-content-center align-items-end judul-font mb-4" style="height: 100px;">
        <h1>Pengolahan Kopi</h1>
    </div>
    <div class="d-flex justify-content-center align-items-start judul-font mt-5" style="height: 550px">
        <div class="row">
            <div class="col-6">
                <div class="card" style="width: 500px; height:500px">
                    @if ($judul ==='kosong')
                        
                    @else
                    <div class="d-flex justify-content-center mt-3">            
                        <?php
                            $link = $tampil->video;
                            $embeddedLink = str_replace("watch?v=", "embed/", $link);
                        ?>
                        <iframe class="embed-responsive-item" src="{{ $embeddedLink }}" allowfullscreen style="width: 400px; height:250px"></iframe>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">{{ $tampil->judul }}</h3>
                        <p class="card-title" style="color: darkgrey">{{ $tampil->deskripsi_video }}</p>
                    </div>
                    @endif
                </div>
            </div>
            <div class="col-6">
                <div class="card" style="width: 500px; height:500px">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6 d-flex justify-content-start">
                                <h2>Daftar Materi</h2>
                            </div>    
                            <div class="col-6 d-flex justify-content-end">
                                <h2>{{ $tampilkan->where('status', 'Aktif')->count() }} Video</h2>
                            </div>
                        </div>
                        <div class="video-gallery d-flex">                            
                            @foreach($tampilkan as $tampil)
                            @if ($tampil->status == "Aktif")
                            <a href="{{$tampil->judul ? 'pelatihan_pengolahan_kopi?judul='.urlencode($tampil->judul) : 'pelatihan_pengolahan_kopi'}}" style="text-decoration: none;color:inherit">
                                <div class="video-card card" style="height: 100px;width:450px">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="d-flex justify-content-center align-items-center" style="height: 100px;width:200px">
                                                <img src="{{ asset('storage/gambar_video/' . $tampil->gambar) }}" class="card-img-top video-thumbnail" alt="Video 1" style="height: 80px;width:150px">
                                            </div>
                                        </div>
                                        <div class="col-7" style="color: darkgrey">
                                            <div class="d-flex align-items-center" style="height: 100px">
                                                <p>{{ $tampil->judul }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>                            
                            </a>
                            @else
                                
                            @endif
                            @endforeach  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-start judul-font" style="height: 270px">
        <div class="card" style="border-top: none;border-bottom:none;border-left:none;border-right:none;width:1000px">
            <div class="card-body">
                <h4 class="card-title" style="font-weight: bold">Tentang Pelatihan</h4>
                <br>
                <p class="card-title">Pengolahan kopi adalah proses mengolah biji kopi mentah menjadi biji kopi siap saji yang dapat digunakan untuk menyeduh minuman kopi. Proses ini mencakup beberapa tahap utama dan penting untuk proses selanjutnya.</p>
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