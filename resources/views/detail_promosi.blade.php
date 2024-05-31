<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="gambar/Logo SI-SIP.png" type="image/x-icon">
    <title>Promosi</title>
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
        .pengajuan{
            background-image: url('gambar/Pengajuan.png');
            background-size: cover;
            border: none;
            width: 132px;
            height: 47px;
        }
        .tulisan{
            font-family: 'Inter', sans-serif;
        }
        .tulisan-promosi{
            font-family: 'Inter', sans-serif;
            font-weight: 600;
            font-size: 17px;
        }
        .kembali{
            background-image: url('gambar/back.png');
            background-size: cover;
            border: none;
            width: 40px;
            height: 40px;
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
                            <a class="nav-link active navbar-font" href="promosi_petani_kopi">Promosi</a>
                        @elseif($user->role == 'Fasilitator')
                        <a class="nav-link active navbar-font" href="promosi_fasilitator">Promosi</a>
                        @elseif ($user->role == 'Admin')
                        <a class="nav-link active navbar-font" href="promosi_admin">Promosi</a>
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
                                    <a href="{{ url('akun_petani') . '?data=' . $user->username }}" style="color:black">Akun</a>
                                @elseif ($user->role == 'Admin')
                                    <a href="{{url("akun_admin").'?data=' . $user->username}}" style="color:black">Akun</a>
                                @elseif ($user->role == 'Fasilitator')
                                    <a href="{{ url('akun_fasilitator') . '?data=' . $user->username }}" style="color:black">Akun</a>
                                @endif
                            </li>
                            <li><a href="{{ route('actionlogout') }}" style="color:red"><i class="fa fa-power-off"></i> Log Out</a></li>
                        </ul>
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
    <div class="d-flex justify-content-center align-items-end judul-font" style="height: 100px">
        <div class="d-flex justify-content-between" style="width: 1000px">
            @if ($user->role == 'Petani')
            <a href="promosi_petani_kopi" class="btn kembali" role="button"></a>
            @elseif($user->role == 'Fasilitator')
            <a href="promosi_fasilitator" class="btn kembali" role="button"></a>
            @elseif ($user->role == 'Admin')
            <a href="promosi_admin" class="btn kembali" role="button"></a>
            @endif
        </div>
    </div>
    <div class="d-flex justify-content-center mt-5" style="height:450px">
        <div class="d-flex" style="width: 1000px">
            <div class="row w-100">
                <div class="col-6">
                    <img src="{{ asset('storage/promosi/' . $promosi->foto_produk) }}" style="width:400px;height:400px">
                </div>
                <div class="col-6">
                    <div>
                        <p class="tulisan mt-4 mb-4" style="font-size: 40px;font-weight:bold">{{$promosi->nama_produk}}</p>
                        <p class="tulisan mb-5" style="font-size: 27px;font-weight:600">Rp{{$promosi->harga}}</p>
                        <p class="tulisan mb-4" style="font-size: 21px; font-weight: 500;">Nama Usaha <span style="display:inline-block; width: 76px;"></span> : {{$promosi->nama_usaha}}</p>
                        <p class="tulisan mb-4" style="font-size: 21px; font-weight: 500;">Nomor Telepon <span style="display:inline-block; width: 50px;"></span> : {{$promosi->nomor_telepon}}</p>
                        <p class="tulisan" style="font-size: 21px; font-weight: 500;">Alamat Petani <span style="display:inline-block; width: 65px;"></span> : {{$alamat->alamat}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center" style="height:250px">
        <div class="d-flex" style="width: 1000px">
            <p class="tulisan" style="font-size: 17px">{{$promosi->deskripsi_produk}}</p>
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