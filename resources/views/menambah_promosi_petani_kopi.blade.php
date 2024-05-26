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
        .kembali{
            background-image: url('gambar/back.png');
            background-size: cover;
            border: none;
            width: 40px;
            height: 40px;
        }
        .tombol-simpan{
            background-size:300px 50px;
            border: none;
            cursor: pointer;
            background-image: url("gambar/Login.png");
            color: white;
            width: 300px;
            height: 50px;
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
            <a href="promosi_petani_kopi" class="btn kembali" role="button"></a>
            <h1 style="margin-left: 20px">Tambah Pengajuan Promosi</h1>
        </div>
    </div>
    <div class="d-flex justify-content-center mb-5">
        <div class="d-flex justify-content-center" style="width: 900px">
            <form action="kirim_pengajuan_promosi" class="row w-100" enctype="multipart/form-data" method="POST" id="formulir">
                @csrf
                <div class="col-12 mb-4">
                    <label for="nama_usaha" style="font-weight: bold;" class="mb-3">Nama Usaha</label>
                    <input type="text" id="nama_usaha" name="nama_usaha" class="form-control" value="{{$user->nama_usaha}}" readonly>
                </div>
                <div class="col-12 mb-4">
                    <label for="nomor_telepon" style="font-weight: bold;" class="mb-3">Nomor Telepon</label>
                    <input type="text" id="nomor_telepon" name="nomor_telepon" class="form-control" value="{{$user->nomor_telepon}}" readonly>
                </div>
                <div class="col-12 mb-3">
                    <label for="nama_produk" style="font-weight: bold;" class="mb-3">Nama Produk</label>
                    <input type="text" id="nama_produk" name="nama_produk" class="form-control" placeholder="Masukkan Nama" required>
                </div>
                <div class="col-12 mb-3">
                    <label for="foto_produk" style="font-weight: bold" class="mb-3">Foto Produk</label>
                    <input type="file" class="form-control" name="foto_produk" id="foto_produk" required>
                </div>
                <div class="col-12 mb-3">
                    <label for="deskripsi_produk" style="font-weight: bold;" class="mb-3">Deskripsi Produk</label>
                    <input type="text" id="deskripsi_produk" name="deskripsi_produk" class="form-control" placeholder="Masukkan Deskripsi" style="height: 200px" required>
                </div>
                <div class="col-12 mb-4">
                    <label for="harga" style="font-weight: bold;" class="mb-3">Harga</label>
                    <input type="text" id="harga" name="harga" class="form-control" placeholder="Masukkan Harga">
                </div>
                <div class="col-12 mb-3 d-flex justify-content-center">
                    <button class="btn tombol-simpan mt-4" type="submit">Ajukan</button>
                </div>
            </form>
        </div>
    </div>
    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="card" style="border-color:brown" style="width:150px;height:160px ">
                    <div class="card-body text-center">
                        <img src="gambar/warning (1) 1.png" alt="" style="width: 50px;height:50px">
                        <h3>Apakah Anda Yakin?</h3>
                        <p>Pengajuan promosi Anda akan <br>ditambahkan ke dalam sistem.</p>
                        <div class="d-flex justify-content-center align-item-center">
                            <div class="row">
                                <div class="col-6">
                                    <button class="btn btn-secondary" type="button" style="width: 100px;" id="yaButton" >Ya</button>
                                </div>
                                <div class="col-6">
                                    <button class="btn btn-danger" type="button" data-bs-dismiss="modal" style="width:100px" id="batalButton">Batal</button>
                                </div>
                            </div>
                        </div>
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
    <script>
        // Mendapatkan elemen input harga
        var inputHarga = document.getElementById('harga');
    
        // Menambahkan event listener untuk mendengarkan perubahan nilai pada input
        inputHarga.addEventListener('input', function(event) {
            // Mengambil nilai input
            var nilaiInput = inputHarga.value;
    
            // Menghapus karakter non-digit
            var nilaiTanpaPemisah = nilaiInput.replace(/\D/g, '');
    
            // Menambahkan pemisah ribuan
            var nilaiDenganPemisah = nilaiTanpaPemisah.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    
            // Menetapkan nilai yang telah diformat kembali ke input
            inputHarga.value = nilaiDenganPemisah;
        });
    </script>
    <script>
    document.getElementById("formulir").addEventListener("submit", function(event) {
        // Mencegah aksi default dari pengiriman form
        event.preventDefault();
        
        // Menampilkan pop-up konfirmasi
        $('#myModal').modal('show');
    });

    document.getElementById("yaButton").addEventListener("click", function(event) {
        // Menyembunyikan pop-up konfirmasi
        $('#myModal').modal('hide');
        $('#modal_berhasil').modal('show');
        setTimeout(function() {
            $('#modal_berhasil').modal('hide');
            $('#formulir').submit();
        }, 4000);
        // Mengirimkan form secara manual
        document.getElementById("formulir").submit();
    });

    document.getElementById("batalButton").addEventListener("click", function(event) {
        // Menyembunyikan pop-up konfirmasi
        $('#myModal').modal('hide');
    });
    </script>
</body>
</html>