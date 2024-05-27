<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="gambar/Logo SI-SIP.png" type="image/x-icon">
    <title>Video Pelatihan</title>
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
                        <a class="nav-link active navbar-font" aria-current="page" href="pelatihan_admin">Pelatihan</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link navbar-font" href="sertifikasi_admin">Sertifikasi</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link navbar-font" href="promosi_admin">Promosi</a>
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
                            <li><a href="akun_admin">Akun</a></li>
                            <li><a href="{{ route('actionlogout') }}"><i class="fa fa-power-off"></i> Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>            
        </div>
    </nav>
    <div class="d-flex justify-content-center align-items-end judul-font mb-4" style="height: 150px;">
        <h1>{{$tampil->judul}}</h1>
    </div>
    <div class="d-flex justify-content-center align-items-center judul-font" style="height:auto">
        <div class="d-flex justify-content-center text-center" style="width: 900px">
            {{$tampil->deskripsi_video}}
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center" style="height: 500px">
        <div class="card" style="width:900px; height:400px">
            <div class="card-body">
                <?php
                $link = $tampil->video;
                $embeddedLink = str_replace("watch?v=", "embed/", $link);
                ?>
                <iframe class="embed-responsive-item" src="<?php echo $embeddedLink; ?>" allowfullscreen style="width: 860px;height:370px"></iframe>
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