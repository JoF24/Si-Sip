<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="gambar/Logo SI-SIP.png" type="image/x-icon">
    <title>Sertifikasi</title>
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
        .tulisan-tombol{
            font-family: 'Inter', sans-serif;
            font-size: 20px;
            font-weight: 600; 
        }
        .tombol-simpan{
            background-size:300px 50px;
            border: none;
            cursor: pointer;
            background-image: url("gambar/Simpan.png");
            color: white;
            width: 300px;
            height: 50px;
        }
        .highlight {
            color: white !important;
        }
        .highlight p {
            color: white !important;
        }
        .diterima-card {
            border-color: green;
        }
        .ditinjau-card {
            border-color:orange;
        }
        .ditolak-card {
            border-color: red;
        }
        .highlight.diterima-card {
            background-color: green;
        }
        .highlight.ditinjau-card {
            background-color: orange;
            color: white;
        }
        .highlight.ditolak-card {
            background-color: red;
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
                        <a class="nav-link navbar-font" aria-current="page" href="pelatihan_fasilitator">Pelatihan</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link active navbar-font" href="sertifikasi_fasilitator">Sertifikasi</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link navbar-font" href="sertifikasi_fasilitator">Promosi</a>
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
                            <li><a href="{{ url('akun_fasilitator') . '?data=' . $user->username }}" style="color:black">Akun</a></li>
                            <li><a href="{{ route('actionlogout') }}" style="color:red"><i class="fa fa-power-off"></i> Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>            
        </div>
    </nav>
    <div class="d-flex justify-content-center align-items-end judul-font mb-5" style="height: 100px">
        <div class="d-flex justify-content-start" style="width: 1000px">
            <a href="sertifikasi_fasilitator" class="btn kembali" role="button"></a>
            <h1 style="margin-left: 20px">Lihat Detail Pengajuan Sertifikasi</h1>
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center mb-5">
        <div class="card" style="width: 1000px;height:700px">
            <div class="d-flex justify-content-center align-items-center">
                <div class="d-flex tulisan" style="width:850px">
                    <div class="row w-100">
                        <div class="col-12 mb-3 mt-5">
                            <p>Nama Petani<span style="display:inline-block; width: 154px;"></span>: {{ $tampilkan->nama_petani }}</p>
                        </div>
                        <div class="col-12 mb-3">
                            <p>Nomor Telepon<span style="display:inline-block; width: 133px;"></span>: {{ $petani->nomor_telepon }}</p>
                        </div>
                        <div class="col-12 mb-3">
                            <p>Alamat Petani<span style="display:inline-block; width: 145px;"></span>: {{ $petani->alamat }}</p>
                        </div>
                        <div class="col-12 mb-3">
                            <p>Nama Produk<span style="display:inline-block; width: 148px;"></span>: {{ $tampilkan->nama_produk }}</p>
                        </div>
                        <div class="col-12 mb-3">
                            <p>Izin Usaha<span style="display:inline-block; width: 173px;"></span>: 
                                <a href="{{ $tampilkan->izin_usaha }}" download style="color:black">
                                    <img src="gambar/pdf.png" alt="" style="width: 35px;height:35px"> 
                                    {{ $tampilkan->izin_usaha }}</p>
                                </a>
                        </div>
                        <div class="col-12 mb-3">
                            <p>Foto Produk<span style="display:inline-block; width: 160px;"></span>: 
                                <a href="{{ $tampilkan->foto_produk }}" download style="color:black">
                                    <img src="gambar/image.png" alt="" style="width: 35px;height:35px"> 
                                    {{ $tampilkan->foto_produk }}</p>
                                </a>
                        </div>
                        <div class="col-12 mb-3">
                            <p>Video Produk<span style="display:inline-block; width: 148px;"></span>: 
                                <a href="{{ $tampilkan->video_proses_produk }}" download style="color:black">
                                    <img src="gambar/audio.png" alt="" style="width: 35px; height:35px">
                                    {{ $tampilkan->video_proses_produk }}
                                </a> 
                            </p>
                        </div>
                        <div class="col-12 mb-3">
                            <p>Bahan Digunakan<span style="display:inline-block; width: 117px;"></span>: {{ $tampilkan->bahan_digunakan }}</p>
                        </div>
                        <div class="col-12 mb-3">
                            <p>Alat Digunakan<span style="display:inline-block; width: 136px;"></span>: {{ $tampilkan->alat_digunakan }}</p>
                        </div>
                        <div class="col-12 mb-3">
                            <p>Nama Fasilitator<span style="display:inline-block; width: 127px;"></span>: {{ $tampilkan->id_fasilitator }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center" style="height:50px">
        <div class="d-flex" style="width: 1000px">
            <p class="judul-font" style="font-size: 25px;font-weight:bold">Validasi Sertifikasi</p>
        </div>
    </div>
    <div class="d-flex justify-content-center mb-5 mt-4">
        <div class="d-flex" style="width: 1000px">
            <form id="statusForm" action="ubah_status_pengajuan_sertifikasi" method="POST">
                @csrf
                <input type="hidden" id="id_sertifikasi" name="id_sertifikasi" value="{{$tampilkan->id_sertifikasi}}">
                <input type="hidden" id="status" name="status" value="">
                <button type="button" class="status-btn" onclick="setStatus('Diterima', this)" style="border:none; background:none;">
                    <div class="card d-flex justify-content-center align-items-center diterima-card" style="width: 300px; height: 60px;">
                        <p class="tulisan-tombol mt-2" style="color:green">Diterima</p>
                    </div> 
                </button>
                <button type="button" class="status-btn" onclick="setStatus('Ditinjau', this)" style="border:none; background:none;margin-left:25px">
                    <div class="card d-flex justify-content-center align-items-center ditinjau-card" style="width: 300px; height: 60px;">
                        <p class="tulisan-tombol mt-2" style="color:orange">Ditinjau</p>
                    </div> 
                </button>
                <button type="button" class="status-btn" onclick="setStatus('Ditolak', this)" style="border:none; background:none; margin-left:25px;">
                    <div class="card d-flex justify-content-center align-items-center ditolak-card" style="width: 300px; height: 60px;">
                        <p class="tulisan-tombol mt-2" style="color:red">Ditolak</p>
                    </div> 
                </button>
            </form>
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center mb-4">
        <div class="mb-3 d-flex justify-content-start" style="width: 1000px">
            <button class="btn tombol-simpan" style="margin-left:20px;font-size:18px;font-family: 'Inter', sans-serif;" type="submit" onclick="submitForm()">Simpan</button>
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
        function setStatus(status, element) {
            // Set the value of the hidden input field for the corresponding status
            document.getElementById('status').value = status;
        
            // Clear any existing highlights on buttons
            clearHighlight();
        
            // Add highlight to the selected button
            element.querySelector('.card').classList.add('highlight');
        }
        
        function clearHighlight() {
            var buttons = document.getElementsByClassName('status-btn');
            for (var i = 0; i < buttons.length; i++) {
                buttons[i].querySelector('.card').classList.remove('highlight');
            }
        }
        
        function submitForm() {
            // Submit the form with the id 'statusForm'
            document.getElementById('statusForm').submit();
        }
    </script>
</body>
</html>