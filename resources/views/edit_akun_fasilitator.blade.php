<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="gambar/Logo SI-SIP.png" type="image/x-icon">
    <title>Edit Akun Fasilitator</title>
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
        .tombol-simpan{
            background-size:480px 50px;
            border: none;
            cursor: pointer;
            background-image: url("gambar/Login.png");
            color: white;
            width: 480px;
            height: 50px;
        }
        .warna-footer{
            background-color: #282A3A;
            color: white;
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
                        <a class="nav-link navbar-font" href="pelatihan_petani">Pelatihan</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link navbar-font" href="sertifikasi_fasilitator">Sertifikasi</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link navbar-font" href="promosi_fasilitator">Promosi</a>
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
    <div class="d-flex justify-content-center align-items-center judul-font" style="height: 150px;">
        <div class="d-flex" style="width: 1000px">
            <h1>Edit Biodata</h1>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <form action="{{route('simpan_akun_fasilitator')}}" class="row g-3" style="width: 1000px" method="POST" id="formulir" onsubmit="return validateForm()">
            @csrf
            <input type="text" id="id" name="id" class="hidden" value="{{$user->id}}" style="display:none">
            <div class="col-6 mb-3">
                <label for="nama" style="font-weight: bold;" class="mb-3">Nama</label>
                <input type="text" id="nama" name="nama" class="form-control" value="{{ $user->nama }}" required>
            </div>
            <div class="col-6 mb-3">
                <label for="provinsi" class="mb-3" style="font-weight: bold;">Provinsi</label>
                <select name="provinsi" id="provinsi" class="form-select" required>
                    <option value="Jawa Timur"{{ $user->provinsi == 'Jawa Timur' ? 'selected' : '' }}>Jawa Timur</option>
                    <option value="Jawa Tengah"{{ $user->provinsi == 'Jawa Tengah' ? 'selected' : '' }}>Jawa Tengah</option>
                    <option value="Jawa Barat"{{ $user->provinsi == 'Jawa Barat' ? 'selected' : '' }}>Jawa Barat</option>
                </select>
            </div>
            <div class="col-6 mb-3">
                <label for="nomor" style="font-weight: bold;" class="mb-3">Nomor Telepon</label>
                <input type="text" id="nomor_telepon" name="nomor_telepon" class="form-control" value="{{ $user->nomor_telepon }}" required>
            </div>
            <div class="col-6 mb-3">
                <label for="username" style="font-weight: bold;" class="mb-3">Username</label>
                <input type="text" name="username" id="username" class="form-control" value="{{ $user->username }}" required> 
            </div>
            <div class="col-6 mb-3">
                <label for="alamat" style="font-weight: bold;" class="mb-3">Alamat</label>
                <input type="text" name="alamat" id="alamat" class="form-control" value="{{ $user->alamat }}" required>
            </div>
            <div class="col-6 mb-3">
                <label for="password" class="mb-3" style="font-weight: bold;">Password</label>
                <input type="password" name="password" id="password" class="form-control" value="{{ $user->password }}" required>
            </div>
            <div class="col-6 mb-3">
                <label for="kecamatan" class="mb-3" style="font-weight: bold;">Kecamatan</label>
                <select name="kecamatan" id="kecamatan" class="form-select" required>
                    <option value="Pakusari" {{ $user->kecamatan == 'Pakusari' ? 'selected' : '' }}>Pakusari</option>
                    <option value="Kaliwates" {{ $user->kecamatan == 'Kaliwates' ? 'selected' : '' }}>Kaliwates</option>
                    <option value="Patrang" {{ $user->kecamatan == 'Patrang' ? 'selected' : '' }}>Patrang</option>
                    <option value="Sumbersari" {{ $user->kecamatan == 'Sumbersari' ? 'selected' : '' }}>Sumbersari</option>
                    <option value="Kebonsari" {{ $user->kecamatan == 'Kebonsari' ? 'selected' : '' }}>Kebonsari</option>
                </select>
            </div>
            <div class="col-6 mb-3">
                <label for="konfirmasi_password" class="mb-3" style="font-weight: bold;">Konfirmasi Password</label>
                <input type="password" class="form-control" name="konfirmasi_password" id="konfirmasi_password" placeholder="Masukkan Ulang Password" required>
                <span id="konfirmasiPasswordError" class="text-danger"></span>
            </div>
            <div class="col-6 mb-3">
                <label for="kabupaten" class="mb-3" style="font-weight: bold;">Kabupaten</label>
                <select name="kabupaten" id="kabupaten" class="form-select" required>
                    <option value="Jember" {{ $user->kabupaten == 'Jember' ? 'selected' : '' }}>Jember</option>
                    <option value="Situbondo"{{ $user->kabupaten == 'Situbondo' ? 'selected' : '' }}>Situbondo</option>
                    <option value="Bondowoso"{{ $user->kabupaten == 'Bondowoso' ? 'selected' : '' }}>Bondowoso</option>
                    <option value="Banyuwangi"{{ $user->kabupaten == 'Banyuwangi' ? 'selected' : '' }}>Banyuwangi</option>
                    <option value="Probolinggo"{{ $user->kabupaten == 'Probolinggo' ? 'selected' : '' }}>Probolinggo</option>
                </select>
            </div>
            <div class="col-6 mt-4">
                <button class="btn tombol-simpan mt-4" type="submit">Simpan</button>
            </div>
        </form>
    </div>
    <div class="d-flex" style="height:150px"></div>
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
        function validateForm() {
            var password = document.getElementById('password').value;
            var konfirmasiPassword = document.getElementById('konfirmasi_password').value;
            var konfirmasiPasswordError = document.getElementById('konfirmasiPasswordError');

            // Reset error messages
            konfirmasiPasswordError.textContent = '';

            if (password !== konfirmasiPassword) {
                konfirmasiPasswordError.textContent = 'Password dan Konfirmasi Password tidak cocok.';
                return false;
            }
            return true;
        }
    </script>
</body>
</html>