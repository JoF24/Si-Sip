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
        .tambah-progres{
            background-image: url('gambar/tambah_progres.png');
            background-size: cover;
            border: none;
            width: 170px;
            height: 48px;
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
                            <li><a href="{{ url('akun_fasilitator') . '?data=' . $user->username }}">Akun</a></li>
                            <li><a href="{{ route('actionlogout') }}"><i class="fa fa-power-off"></i> Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>            
        </div>
    </nav>
    <div class="d-flex justify-content-center align-items-end judul-font mb-5" style="height: 100px">
        <div class="d-flex justify-content-start" style="width: 1000px">
            <a href="{{ url('progres_pengajuan_sertifikasi_fasilitator') }}?id={{ $progres->id_progres }}" class="btn kembali" role="button"></a>
            <h1 style="margin-left: 20px">Tambah Data Progres</h1>
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center mb-5">
        <div class="card" style="width: 1000px;height:800px">
            <div class="d-flex justify-content-center align-items-center">
                <div class="d-flex tulisan" style="width:850px">
                    <div class="row w-100 mt-5">
                        @foreach ($keterangan_kemajuan as $keterangan)
                        <div class="col-12 mb-3 kemajuan-item" style="display: flex; align-items: center; cursor: pointer;" onclick="handleClick(this, '{{ $keterangan->kemajuan }}', '{{ $keterangan->id_kemajuan }}')">
                            <img src="gambar/progres 1.png" style="width: 40px; height: 40px;" class="kemajuan-img">
                            <p style="margin-right: auto; margin-left: 20px; margin-top: 15px;">{{ $keterangan->kemajuan }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center mb-4">
        <div class="mb-3 d-flex justify-content-start" style="width: 1000px">
            <button class="btn tombol-simpan" style="margin-left:20px;font-size:18px;font-family: 'Inter', sans-serif;" type="submit" onclick="submitForm()">Simpan</button>
        </div>
    </div>
    <form id="hidden-form" method="POST" action="tambah_progres_pengajuan_sertifikasi_fasilitator" style="display: none;">
        @csrf
        <input type="hidden" name="id_progres" id="id_progres" value="{{ $progres->id_progres }}">
        <input type="hidden" name="id_kemajuan" id="id_kemajuan">
        <input type="hidden" name="catatan" id="form_catatan">
    </form>
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
        let lastClickedElement = null; // Variable to keep track of the last clicked element
        let textboxContainer = document.createElement('div'); // Create the textbox container
        textboxContainer.id = 'textbox-container';
        textboxContainer.style.display = 'none';
        textboxContainer.style.marginTop = '10px';
        textboxContainer.innerHTML = '<textarea id="catatan" rows="4" cols="80" style="margin-left:60px" placeholder="  Masukkan Catatan"></textarea>';
        
        document.body.appendChild(textboxContainer); // Append the container to the body
        
        function handleClick(element, keterangan, id_kemajuan) {
            // If there's a previously clicked element, reset it
            if (lastClickedElement) {
                let lastImg = lastClickedElement.querySelector('.kemajuan-img');
                lastImg.src = 'gambar/progres 1.png'; // Reset to original image
            }

            // Change the image of the clicked element
            let img = element.querySelector('.kemajuan-img');
            img.src = 'gambar/progres 2.png'; // Change to the new image

            // Move the textbox container below the clicked element
            element.parentNode.insertBefore(textboxContainer, element.nextSibling);
            textboxContainer.style.display = (keterangan === 'Dikembalikan Oleh Komite Fatwa') ? 'block' : 'none';

            // Update hidden form fields with selected values
            document.getElementById('id_kemajuan').value = id_kemajuan;

            // Update the last clicked element to the current one
            lastClickedElement = element;
        }

        function submitForm() {
            // Update the hidden catatan field in the form with the value of the textarea
            document.getElementById('form_catatan').value = document.getElementById('catatan').value;
            document.getElementById('hidden-form').submit();
        }
    </script>
</body>
</html>