<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="gambar/Logo SI-SIP.png" type="image/x-icon">
    <title>Progres Sertifikasi</title>
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
        .page-item:not(.active) .page-link {
            color: black; 
        }
        .kembali{
            background-image: url('gambar/back.png');
            background-size: cover;
            border: none;
            width: 40px;
            height: 40px;
        }
        .tulisan{
            font-family: 'Inter', sans-serif;
            font-size: 17px;
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
                        <a class="nav-link navbar-font" aria-current="page" href="pelatihan_petani">Pelatihan</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link active navbar-font" href="sertifikasi_petani">Sertifikasi</a>
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
    <div class="d-flex justify-content-center align-items-end judul-font mb-5" style="height: 100px">
        <div class="d-flex justify-content-start" style="width: 1000px">
            <a href="sertifikasi_petani" class="btn kembali" role="button"></a>
            <h1 style="margin-left: 20px">Progres Pengajuan Sertifikasi</h1>
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center mb-5">
        <div class="card" style="width: 1000px;height:700px">
            <div class="d-flex justify-content-center align-items-center">
                <div class="d-flex tulisan" style="width:850px">
                    <div class="row w-100">
                        @foreach ($kemajuan as $kemajuans)
                        <?php 
                        $kemajuans = (int)$kemajuans;
                        ?>
                        @if ($kemajuans === 1)
                        <div class="col-12 mt-5" style="display: flex; align-items: center;">
                            <img src="gambar/progres 1.png" style="width: 40px; height: 40px;">
                            <p style="margin-right: auto;margin-left:20px;margin-top:15px">{{$keterangan_kemajuan[0]->kemajuan}}</p>
                            <p style="margin-left: auto;">{{$progres->$kemajuans}}</p>
                        </div> 
                        @else
                        <div class="col-12" style="display: flex; align-items: center;margin-left:15px">
                            <img src="gambar/garis.png" style="width: 7px; height: 50px;">
                        </div>
                        <div class="col-12" style="display: flex; align-items: center;">
                            <img src="gambar/progres 1.png" style="width: 40px; height: 40px;">
                            @foreach ($keterangan_kemajuan as $keterangan)
                            @if($kemajuans === $keterangan->id_kemajuan)
                            <p style="margin-right: auto;margin-left:20px;margin-top:15px">{{$keterangan->kemajuan}}</p>
                            <p style="margin-left: auto;">{{$progres->$kemajuans}}</p>
                            @endif
                            @endforeach
                        </div>
                        @endif
                    @endforeach
                    </div>
                </div>
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