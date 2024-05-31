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
                        <a class="nav-link navbar-font" href="sertifikasi_petani">Sertifikasi</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link active navbar-font" href="promosi_petani_kopi">Promosi</a>
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
                            <li><a href="{{ url('akun_petani') . '?data=' . $user->username }}" style="color:red">Akun</a></li>
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
            <h1>Daftar Produk</h1>
            <a href="menambah_promosi_petani_kopi" class="btn pengajuan" role="button"></a>
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center mt-4" style="height:100px">
        <div class="d-flex flex-column" style="width: 1000px">
            <div class="d-flex align-items-center">
                <p class="tulisan-promosi">Promosi Milik Anda</p>
                <div style="border: 3px solid #ccc; width: 80%;margin-left:40px;margin-bottom:13px"></div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center" style="height: 300px">
        <div class="d-flex" style="width: 1000px;overflow-y:auto;">
            @foreach($promosiku as $promosi)
            <a href="{{ route('detail_promosi', ['id_promosi' => $promosi->id_promosi]) }}" style="text-decoration: none">
                <div class="card" style="height: 274px; width: 262px">
                    <img src="{{ asset('storage/promosi/' . $promosi->foto_produk) }}" alt="" style="width: 262px;height:180px">
                    <p class="tulisan mt-3" style="margin-left: 15px;font-weight: 600;font-size: 17px;">{{$promosi->nama_produk}}</p>
                    <p class="tulisan" style="margin-left: 15px;font-size: 15px;">Rp{{$promosi->harga}}</p>
                </div>
            </a>
            @endforeach
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center mt-4" style="height:100px">
        <div class="d-flex flex-column" style="width: 1000px">
            <div class="d-flex align-items-center">
                <p class="tulisan-promosi">Promosi Lainnya</p>
                <div style="border: 3px solid #ccc; width: 80%;margin-left:60px;margin-bottom:13px"></div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center" style="height: 300px">
        <div class="d-flex" style="width: 1000px;overflow-y:auto;">
            @foreach($promosilain as $promosi)
            <a href="{{ route('detail_promosi', ['id_promosi' => $promosi->id_promosi]) }}" style="text-decoration: none">
                <div class="card" style="height: 274px; width: 262px">
                    <img src="{{ asset('storage/promosi/' . $promosi->foto_produk) }}" alt="" style="width: 262px;height:180px">
                    <p class="tulisan mt-3" style="margin-left: 15px;font-weight: 600;font-size: 17px;">{{$promosi->nama_produk}}</p>
                    <p class="tulisan" style="margin-left: 15px;font-size: 15px;">Rp{{$promosi->harga}}</p>
                </div>
            </a>
            @endforeach
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