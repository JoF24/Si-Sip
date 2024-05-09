<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="gambar/Logo SI-SIP.png" type="image/x-icon">
    <title>Pelatihan</title>
    <link rel="stylesheet" href="css/halaman_utama.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap">
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
        .navbar-nav .nav-item .nav-link.active {
            color: #7A3220; 
            border-bottom: 3px solid #7A3220;
        }
        .tulisan{
            font-family: 'Inter', sans-serif;
            font-size: 20px;
            font-weight: 500;
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
                        <a class="nav-link navbar-font" aria-current="page" href="pelatihan_admin">Pelatihan</a>
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
                                    <a href="akun_admin">Akun</a>
                                @elseif ($user->role == 'Fasilitator')
                                    <a href="akun_admin">Akun</a>
                                @endif
                            </li>
                            <li><a href="{{ route('actionlogout') }}"><i class="fa fa-power-off"></i> Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>            
        </div>
    </nav>
    <div class="d-flex justify-content-center align-items-end judul-font" style="height: 100px">
        <div class="d-flex justify-content-start" style="width: 1000px">
            <h1>Akun</h1>
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center" style="height: 600px">
        <div class="card" style="height: 500px; width:1000px">
            <div class="card-header bg-white">
                <nav class="navbar navbar-expand-lg bg-white">
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ml-auto nav-underline">
                                @if ($data === 'petani_fasilitator')
                                <li class="nav-item px-3" style="width:150px">
                                    <a class="nav-link navbar-font text-center" href="{{ url('akun_petani') . '?data=' . $user->username }}">Biodata</a>
                                </li>
                                <li class="nav-item px-3">
                                    <a class="nav-link active navbar-font text-center" aria-current="page" href="{{ url('akun_petani') . '?data=petani_fasilitator' }}">Data Fasilitator</a>
                                </li>
                                @else
                                <li class="nav-item px-3" style="width:150px">
                                    <a class="nav-link active navbar-font text-center" href="{{ url('akun_petani') . '?data=' . $user->username }}">Biodata</a>
                                </li>
                                <li class="nav-item px-3">
                                    <a class="nav-link navbar-font text-center" aria-current="page" href="{{ url('akun_petani') . '?data=petani_fasilitator' }}">Data Fasilitator</a>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="card-body">
                @if ($data === 'petani_fasilitator')
                    
                @else
                <div class="d-flex justify-content-center tulisan">
                    <div class="d-flex justify-content-center row g-3 mt-5" style="width:900px">
                        <div class="col-6">
                            <p>Nama<span style="display:inline-block; width: 170px;"></span>: {{ $tampil->nama }}</p>
                        </div>
                        <div class="col-6">
                            <p>Kabupaten<span style="display:inline-block; width: 100px;"></span>: {{ $tampil->kabupaten }}</p>
                        </div>
                        <div class="col-6">
                            <p>Nomor Telepon<span style="display:inline-block; width: 80px;"></span>: {{ $tampil->nomor_telepon }}</p>
                        </div>
                        <div class="col-6">
                            <p>Provinsi<span style="display:inline-block; width: 130px;"></span>: {{ $tampil->provinsi }}</p>
                        </div>
                        <div class="col-6">
                            <p>Nama Usaha<span style="display:inline-block; width: 130px;"></span>:</p>
                        </div>
                        <div class="col-6">
                            <p>Username<span style="display:inline-block; width: 130px;"></span>: {{ $tampil->username }}</p>
                        </div>
                        <div class="col-6">
                            <p>Alamat<span style="display:inline-block; width: 130px;"></span>: {{ $tampil->alamat }}</p>
                        </div>
                        <div class="col-6">
                            <label for="showPassword">Password:</label>
                            <div class="input-group">
                                <input type="text" id="showPassword" class="form-control" value="{{ $tampil->password }}" readonly>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button" id="togglePassword">Tampilkan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center flex-direction:column judul-font warna-footer" style="height: 350px;">
        <div class="row">
            <div class="col-4 mb-3">
                <div class="card warna-footer" style="width:350px;border-top:none;border-bottom:none;border-left:none;border-right:none;">
                    <div class="d-flex justify-content-center align-items-center">
                        <img src="gambar/Frame 28.png" alt="logo" width="240px">
                    </div>
                </div>
            </div>
            <div class="col-4 mb-3">
                <div class="card warna-footer" style="width:350px;border-top:none;border-bottom:none;border-left:none;border-right:none;">
                    <div class="card-body">
                        <div class="d-flex justify-content-center align-items-center">
                            <p class="card-title">
                                email : SI-SIP@gmail.com<br>
                                Phone : +6285 2366 69823
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 mb-3">
                <div class="card warna-footer" style="border-top:none;border-bottom:none;border-left:none;border-right:none;">
                    <div class="card-body">
                        <p class="card-title">Social Media</p>
                        <div class="row">
                            <div class="col-2 mb-3">
                                <img src="gambar/Facebook.png" alt="" width="50px" height="50px">
                            </div>
                            <div class="col-2 mb-3">
                                <img src="gambar/Twitter.png" alt="" width="50px" height="50px">
                            </div>
                            <div class="col-2 mb-3">
                                <img src="gambar/Instagram.png" alt="" width="50px" height="50px">
                            </div>
                            <div class="col-2 mb-3">
                                <img src="gambar/Linkedin.png" alt="" width="50px" height="50px">
                            </div>
                            <div class="col-2 mb-3">
                                <img src="gambar/Youtube.png" alt="" width="60px" height="60px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>    
    <script>
        document.getElementById("togglePassword").addEventListener("click", function() {
            var passwordField = document.getElementById("showPassword");
            if (passwordField.type === "password") {
                passwordField.type = "text";
                passwordField.value = "*".repeat(passwordField.value.length); // Mengganti setiap karakter dengan bintang
                this.textContent = "Sembunyikan";
            } else {
                passwordField.type = "password";
                passwordField.value = "{{ $tampil->password }}"; // Kembalikan nilai password asli
                this.textContent = "Tampilkan";
            }
        });
    </script>
    
    
    
</body>
</html>