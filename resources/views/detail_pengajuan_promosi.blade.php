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
            border: 2px solid blue !important;
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
                        <a class="nav-link active navbar-font" href="sertifikasi_admin">Sertifikasi</a>
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
                            <li><a href="{{ url('akun_admin') . '?data=' . $user->username }}" style="color:red">Akun</a></li>
                            <li><a href="{{ route('actionlogout') }}" style="color:red"><i class="fa fa-power-off"></i> Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>            
        </div>
    </nav>
    <div class="d-flex justify-content-center align-items-end judul-font mb-5" style="height: 100px">
        <div class="d-flex justify-content-start" style="width: 1000px">
            <a href="promosi_admin" class="btn kembali" role="button"></a>
            <h1 style="margin-left: 20px">Lihat Detail Pengajuan Promosi</h1>
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center mb-5">
        <div class="card" style="width: 1000px;height:500px;overflow-x:auto;">
            <div class="d-flex justify-content-center align-items-center">
                <div class="d-flex tulisan" style="width:850px">
                    <div class="row w-100">
                        <div class="col-12 mb-3 mt-5">
                            <p>Nama Usaha<span style="display:inline-block; width: 154px;"></span>: {{ $promosi->nama_usaha }}</p>
                        </div>
                        <div class="col-12 mb-3">
                            <p>Nomor Telepon<span style="display:inline-block; width: 133px;"></span>: {{ $promosi->nomor_telepon }}</p>
                        </div>
                        <div class="col-12 mb-3">
                            <p>Nama Produk<span style="display:inline-block; width: 148px;"></span>: {{ $promosi->nama_produk }}</p>
                        </div>
                        <div class="col-12 mb-3">
                            <p>Foto Produk<span style="display:inline-block; width: 160px;"></span>: <img src="gambar/image.png" alt="" style="width: 35px;height:35px"> {{ $promosi->foto_produk }}</p>
                        </div>
                        <div class="col-12 mb-3">
                            <p>Deskripsi<span style="display:inline-block; width: 185px;"></span>: {{ $promosi->deskripsi_produk }}</p>
                        </div>
                        <div class="col-12 mb-3">
                            <p>Harga<span style="display:inline-block; width: 213px;"></span>: {{ $promosi->harga }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center" style="height:50px">
        <div class="d-flex" style="width: 1000px">
            <p class="judul-font" style="font-size: 22px; font-weight: bold;">Status Validasi</p>
        </div>
    </div>
    
    <div class="d-flex justify-content-center mb-5 mt-4">
        <div class="d-flex" style="width: 1000px">
            <form id="statusForm" action="ubah_status_promosi" method="POST">
                @csrf
                <input type="hidden" id="id_promosi" name="id_promosi" value="{{$promosi->id_promosi}}">
                <input type="hidden" id="statusValidasi" name="status_validasi" value="">
                <input type="hidden" id="statusPromosi" name="status_promosi" value="">
    
                <div class="mb-4">
                    <button type="button" class="status-validasi-btn" onclick="setStatus('Diterima', this, 'statusValidasi')" style="border:none; background:none;">
                        <div class="card d-flex justify-content-center align-items-center" style="width: 300px; height: 60px; border-color: green;">
                            <p class="tulisan-tombol mt-2" style="color: green;">Diterima</p>
                        </div>
                    </button>
                    <button type="button" class="status-validasi-btn" onclick="setStatus('Ditolak', this, 'statusValidasi')" style="border:none; background:none; margin-left:25px;">
                        <div class="card d-flex justify-content-center align-items-center" style="width: 300px; height: 60px; border-color: red;">
                            <p class="tulisan-tombol mt-2" style="color: red;">Ditolak</p>
                        </div>
                    </button>
                </div>
    
                <div class="d-flex justify-content-center" style="height:50px">
                    <div class="d-flex" style="width: 1000px">
                        <p class="judul-font" style="font-size: 22px; font-weight: bold;">Status Promosi</p>
                    </div>
                </div>
    
                <div class="mb-4">
                    <button type="button" class="status-promosi-btn" onclick="setStatus('Aktif', this, 'statusPromosi')" style="border:none; background:none;">
                        <div class="card d-flex justify-content-center align-items-center" style="width: 300px; height: 60px; border-color: green;">
                            <p class="tulisan-tombol mt-2" style="color: green;">Aktif</p>
                        </div>
                    </button>
                    <button type="button" class="status-promosi-btn" onclick="setStatus('Nonaktif', this, 'statusPromosi')" style="border:none; background:none; margin-left:25px;">
                        <div class="card d-flex justify-content-center align-items-center" style="width: 300px; height: 60px; border-color: red;">
                            <p class="tulisan-tombol mt-2" style="color: red;">Nonaktif</p>
                        </div>
                    </button>
                </div>
    
                <div class="d-flex justify-content-center align-items-center mb-4">
                    <div class="mb-3 d-flex justify-content-start" style="width: 1000px">
                        <button class="btn tombol-simpan" style="margin-left:20px;font-size:18px;font-family: 'Inter', sans-serif;" type="submit" onclick="submitForm()">Simpan</button>
                    </div>
                </div>
            </form>
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
        function setStatus(status, element, inputId) {
            // Set the value of the hidden input field for the corresponding status
            document.getElementById(inputId).value = status;
    
            // Clear any existing highlights on buttons
            clearHighlight(inputId);
    
            // Add highlight to the selected button
            element.classList.add('highlight');
        }
    
        function clearHighlight(inputId) {
            // Determine which buttons to clear based on the inputId
            var buttons;
            if (inputId === 'statusValidasi') {
                buttons = document.getElementsByClassName('status-validasi-btn');
            } else {
                buttons = document.getElementsByClassName('status-promosi-btn');
            }
    
            // Loop through each button and remove the 'highlight' class
            for (var i = 0; i < buttons.length; i++) {
                buttons[i].classList.remove('highlight');
            }
        }
    
        function submitForm() {
            // Submit the form with the id 'statusForm'
            document.getElementById('statusForm').submit();
        }
    </script>       
</body>
</html>