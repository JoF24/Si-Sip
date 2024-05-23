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
        .tombol-edit{
            background-image: url("gambar/edit-text.png");
            background-size: cover;
            border: none;
            width: 24px;
            height: 30px;
        }
        .tombol-tambah{
            width: 210px;
            height: 50px;
            background-image: url("gambar/tambah.png");
            background-size: cover;
            border: none;
        }
        .edit-video{
            background-image: url('gambar/Group 16.png');
            background-size: cover;
            border: none;
            width: 70px;
            height: 28px;
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
                            <li><a href="akun_admin">Akun</a></li>
                            <li><a href="{{ route('actionlogout') }}"><i class="fa fa-power-off"></i> Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>            
        </div>
    </nav>
    @if(session('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>    
    @endif
    <div class="d-flex align-items-end judul-font" style="height: 100px;">
        <div class="row w-100">
            <div class="col-7 d-flex justify-content-end">
                <h1>Pelatihan</h1>
            </div>
            <div class="col-2 d-flex justify-content-center align-items-center">
                <a href="mengubah_informasi_pelatihan" class="btn tombol-edit" type="button" title="Klik untuk mengedit informasi pelatihan"></a>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center text-center mt-4" style="height: 50px">
        <div class="d-flex justify-content-center text-center" style="width: 900px">
            @foreach ($informasi_pelatihan as $informasi)
                {{ $informasi->informasi }}
            @endforeach
        </div>
    </div>
    <div class="d-flex align-items-center mt-5" style="height: 50px">
        <div class="d-flex justify-content-end" style="width:1100px">
            <a href="menambah_video" class="tombol-tambah"></a>
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center judul-font mt-4" style="height: 500px">
        <div class="card" style="width: 1000px;height:450px">
            <div class="card-body">
                <h3>Daftar Video</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Video</th>
                            <th> </th>
                            <th>Status</th>
                            <th>Kategori</th>
                            <th>Tanggal Upload</th>
                            <th>Tanggal Nonaktif</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tampilkan as $tampil)
                        <tr>
                            <td class="text-center align-middle">
                                <a href="melihat_pelatihan_admin?judul={{ urlencode($tampil->judul) }}" style="text-decoration: none;color:inherit">
                                    <img src="{{ asset('storage/gambar_video/' . $tampil->gambar) }}" style="width: 150px; height : 100px">                        
                                </a>                                
                            </td>
                            <td class="text-center align-middle">{{ $tampil->judul }}</td>
                            <td class="text-center align-middle">{{ $tampil->status }}</td>
                            <td class="text-center align-middle">{{ $tampil->kategori }}</td>
                            <td class="text-center align-middle">{{ $tampil->tanggal_upload }}</td>
                            <td class="text-center align-middle">{{ $tampil->tanggal_nonaktif }}</td>
                            <td class="text-center align-middle">
                                <a href="edit_video?judul={{ urlencode($tampil->judul) }}" class="btn edit-video" type="button"></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
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