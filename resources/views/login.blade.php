<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="gambar/Logo SI-SIP.png" type="image/x-icon">
    <title>Login</title>
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
        .tombol-login{
            background-size:450px 50px;
            border: none;
            cursor: pointer;
            background-image: url("gambar/Login.png");
            color: white;
            width: 450px;
            height: 50px;
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
                        <a class="nav-link navbar-font" href="beranda">Halaman Utama</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link navbar-font" href="#">Pelatihan</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link navbar-font" href="#">Sertifikasi</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link navbar-font" href="#">Promosi</a>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav ml-auto px-5 nav-underline">
                    <li class="nav-item">
                        <a class="nav-link active navbar-font" aria-current="page" href="login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="registrasi" style="position:relative;">
                            <img src="gambar/Rectangle 1473.png" alt="register" width="100px" height="30px" style="position :relative;">
                            <span class="navbar-font" style="position: absolute; top:50%; left:50%; transform:translate(-50%, -50%); color:white;">Registrasi</span>    
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @if (session('error'))
        <div class="alert alert-danger">
            {{session('error')}}
        </div>
    @endif    
    @if(session('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>    
    @endif
    <div class="row w-100">
        <div class="col-6">
            <img src="gambar/Frame 7.png" alt="" style="width: 625px;height:675px">
        </div>
        <div class="col-6 d-flex justify-content-center align-items-center" style="height: 600px">
            <div class="d-flex justify-content-center judul-font flex-column" style="width:425px">
                <div class="d-flex justify-content-center align-items-center" style="height: 150px">
                    <h1>Login</h1>
                </div>
                <form action="actionlogin" method="POST" style="width:450px">
                    @csrf
                    <div class="mb-3">
                        <label style="font-weight: bold;" class="mb-3" for="username">Username</label>
                        <input type="text" class="form-control mb-3" name="username" placeholder="Masukkan Username" required>
                    </div>
                    <div class="mb-5">
                        <label for="password" class="mb-3" style="font-weight: bold;">Password</label>
                        <input type="password" class="form-control mb-3" name="password" placeholder="Masukkan Password" required>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn tombol-login">Login</button>
                    </div>
                </form>
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
</body>
</html>