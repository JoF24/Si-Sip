<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="gambar/Logo SI-SIP.png" type="image/x-icon">
    <title>Edit Pengajuan Sertifikasi</title>
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
            background-size:400px 50px;
            border: none;
            cursor: pointer;
            background-image: url("gambar/Login.png");
            color: white;
            width: 400px;
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
                            <li><a href="{{ url('akun_petani') . '?data=' . $user->username }}" style="color:black">Akun</a></li>
                            <li><a href="{{ route('actionlogout') }}" style="color:red"><i class="fa fa-power-off"></i> Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>            
        </div>
    </nav>
    <div class="d-flex justify-content-center align-items-end judul-font mb-5" style="height: 100px">
        <div class="d-flex justify-content-start" style="width: 1000px">
            <a href="detail_pengajuan_sertifikasi_petani_kopi?id={{$tampilkan->id_sertifikasi}}" class="btn kembali" role="button"></a>
            <h1 style="margin-left: 20px">Edit Pengajuan Sertifikasi</h1>
        </div>
    </div>
    <div class="d-flex justify-content-center mb-5">
        <div class="d-flex justify-content-center" style="width: 900px">
            <form action="kirim_edit_pengajuan" class="row w-100" enctype="multipart/form-data" method="POST">
                @csrf
                <input type="text" id="id" name="id" class="hidden" value="{{$tampilkan->id_sertifikasi}}" style="display:none">
                <div class="col-12 mb-4">
                    <label for="nama_petani" style="font-weight: bold;" class="mb-3">Nama Petani</label>
                    <input type="text" id="nama_petani" name="nama_petani" class="form-control" value="{{$user->nama}}" readonly>
                </div>
                <div class="col-12 mb-4">
                    <label for="nomor_telepon" style="font-weight: bold;" class="mb-3">Nomor Telepon</label>
                    <input type="text" id="nomor_telepon" name="nomor_telepon" class="form-control" value="{{$user->nomor_telepon}}" readonly>
                </div>
                <div class="col-12 mb-4">
                    <label for="alamat" style="font-weight: bold;" class="mb-3">Alamat</label>
                    <input type="text" id="alamat" name="alamat" class="form-control" value="{{$user->alamat}}" readonly>
                </div>
                <div class="col-12 mb-3">
                    <label for="kecamatan" class="mb-3" style="font-weight: bold;">Kecamatan</label>
                    <select name="kecamatan" id="kecamatan" class="form-select" required disabled readonly>
                        <option value="Pakusari" {{$user->kecamatan == 'Pakusari' ? 'selected' : ''}}>Pakusari</option>
                        <option value="Kaliwates" {{$user->kecamatan == 'Kaliwates' ? 'selected' : ''}}>Kaliwates</option>
                        <option value="Patrang" {{$user->kecamatan == 'Patrang' ? 'selected' : ''}}>Patrang</option>
                        <option value="Sumbersari" {{$user->kecamatan == 'Sumbersari' ? 'selected' : ''}}>Sumbersari</option>
                        <option value="Kebonsari" {{$user->kecamatan == 'Kebonsari' ? 'selected' : ''}}>Kebonsari</option>
                    </select>
                </div>
                <div class="col-12 mb-3">
                    <label for="kabupaten" style="font-weight: bold;" class="mb-3">Kabupaten</label>
                    <select name="kabupaten" id="kabupaten" class="form-select" required disabled readonly>
                        <option value="Jember" {{ $user->kabupaten == 'Jember' ? 'selected' : '' }}>Jember</option>
                        <option value="Situbondo"{{ $user->kabupaten == 'Situbondo' ? 'selected' : '' }}>Situbondo</option>
                        <option value="Bondowoso"{{ $user->kabupaten == 'Bondowoso' ? 'selected' : '' }}>Bondowoso</option>
                        <option value="Banyuwangi"{{ $user->kabupaten == 'Banyuwangi' ? 'selected' : '' }}>Banyuwangi</option>
                        <option value="Probolinggo"{{ $user->kabupaten == 'Probolinggo' ? 'selected' : '' }}>Probolinggo</option>
                    </select>
                </div>
                <div class="col-12 mb-3">
                    <label for="provinsi" style="font-weight: bold;" class="mb-3">Provinsi</label>
                    <select name="provinsi" id="provinsi" class="form-select" disabled readonly>
                        <option value="Jawa Timur" {{$user->provinsi == 'Jawa Timur' ? 'selected' : ''}}>Jawa Timur</option>
                        <option value="Jawa Tengah" {{$user->provinsi == 'Jawa Tengah' ? 'selected' : ''}}>Jawa Tengah</option>
                        <option value="Jawa Barat" {{$user->provinsi == 'Jawa Barat' ? 'selected' : ''}}>Jawa Barat</option>
                    </select>
                </div>
                <div class="col-12 mb-3">
                    <label for="nama_produk" style="font-weight: bold;" class="mb-3">Nama Produk</label>
                    <input type="text" id="nama_produk" name="nama_produk" class="form-control" value="{{$tampilkan->nama_produk}}" required>
                </div>
                <div class="col-12 mb-3">
                    <label for="izin_usaha" style="font-weight: bold" class="mb-3">Izin Usaha</label>
                    <input type="file" class="form-control" name="izin_usaha" id="izin_usaha" value={{$tampilkan->izin_usaha}}>
                </div>
                <div class="col-12 mb-3">
                    <label for="foto_produk" style="font-weight: bold" class="mb-3">Foto Produk</label>
                    <input type="file" class="form-control" name="foto_produk" id="foto_produk" value={{$tampilkan->foto_produk}}>
                </div>
                <div class="col-12 mb-3">
                    <label for="video_produk" style="font-weight: bold" class="mb-3">Video Produk</label>
                    <input type="file" class="form-control" name="video_produk" id="video_produk" value={{$tampilkan->video_proses_produk}}>
                </div>
                <div class="col-12 mb-3">
                    <label for="bahan_digunakan" style="font-weight: bold;" class="mb-3">Bahan Digunakan</label>
                    <input type="text" id="bahan_digunakan" name="bahan_digunakan" class="form-control" value="{{$tampilkan->bahan_digunakan}}" style="height: 200px" required>
                </div>
                <div class="col-12 mb-3">
                    <label for="alat_digunakan" style="font-weight: bold;" class="mb-3">Alat Digunakan</label>
                    <input type="text" id="alat_digunakan" name="alat_digunakan" class="form-control" value="{{$tampilkan->alat_digunakan}}" style="height: 200px" required>
                </div>
                <div class="col-12 mb-4">
                    <label for="nama_fasilitator" style="font-weight: bold;" class="mb-3">Nama Fasilitator</label>
                    <input type="text" id="nama_fasilitator" name="nama_fasilitator" class="form-control" value="{{$tampilkan->id_fasilitator}}" readonly>
                </div>
                <div class="col-12 mb-3 d-flex justify-content-center">
                    <button class="btn tombol-simpan mt-4" type="submit">Simpan</button>
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
</body>
</html>