<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="gambar/Logo SI-SIP.png" type="image/x-icon">
    <title>Menambah Video</title>
    <link rel="stylesheet" href="css/halaman_utama.css">
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
        .tombol-registrasi{
            background-size:200px 50px;
            border: none;
            cursor: pointer;
            background-image: url("gambar/Login.png");
            color: white;
            width: 200px;
            height: 50px;
        }
        .warna-footer{
            background-color: #282A3A;
            color: white;
        }
        .modal-dialog {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
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
                            <li><a href="{{ route('actionlogout') }}"><i class="fa fa-power-off"></i> Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="d-flex justify-content-center align-items-center judul-font" style="height: 150px">
        <div class="d-flex justify-content-start" style="width: 1000px">
            <h1>Tambah Video</h1>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <form action="{{route('actiontambah')}}" class="row g-3" style="width: 1000px" method="POST" id="formulir" enctype="multipart/form-data">
            @csrf
            <div class="col-12 mb-3">
                <label for="judul" style="font-weight: bold;" class="mb-3">Judul Video</label>
                <input type="text" id="judul" name="judul" class="form-control" placeholder="Masukkan Judul" required>
            </div>
            <div class="col-12 mb-3">
                <label for="deskripsi" style="font-weight: bold;" class="mb-3">Deskripsi Video</label>
                <input type="text" id="deskripsi" name="deskripsi" class="form-control" placeholder="Masukkan Deskripsi" style="height: 200px" required>
            </div>
            <div class="col-12 mb-3">
                <label for="link-video" style="font-weight: bold;" class="mb-3">Tautan Video</label>
                <input type="text" name="video" id="video" class="form-control" placeholder="Masukkan Tautan Video" required>
            </div>
            <div class="col-12 mb-3">
                <label for="input_gambar" style="font-weight: bold" class="mb-3">Gambar Video</label>
                <input type="file" class="form-control" name="gambar" id="gambar" required>
            </div>
            <div class="col-12 mb-3">
                <label for="kategori" class="mb-3" style="font-weight: bold;">Kategori</label>
                <select name="kategori" id="kategori" class="form-select" required>
                    <option value="" disabled selected hidden>Pilih Kategori Pelatihan</option>
                    <option value="Budidaya Kopi">Budidaya Kopi</option>
                    <option value="Pengolahan Kopi">Pengolahan Kopi</option>
                    <option value="Pemasaran Kopi">Pemasaran Kopi</option>
                    <option value="Barista">Barista</option>
                    <option value="Kewirausahaan">Kewirausahaan</option>
                </select>

            </div>
            <div class="d-flex justify-content-end align-items-center">
                <div class="mb-3">
                    <button class="btn tombol-registrasi mt-4" type="submit">Simpan</button>
                </div>
            </div>
        </form>
    </div>
    <div class="d-flex" style="height:150px"></div>
    <div class="d-flex justify-content-center align-items-center flex-direction:column judul-font warna-footer" style="height: 250px;">
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
</body>
</html>