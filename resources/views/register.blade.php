<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="gambar/Logo SI-SIP.png" type="image/x-icon">
    <title>Registrasi</title>
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
        .tombol-registrasi{
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
        .modal-dialog {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
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
                        <a class="nav-link navbar-font" href="beranda">Halaman Utama</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link navbar-font" href="#">Pelatihan</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link navbar-font" href="sertifikasi">Sertifikasi</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link navbar-font" href="promosi">Promosi</a>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav ml-auto px-5 nav-underline">
                    <li class="nav-item">
                        <a class="nav-link navbar-font" href="login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="registrasi" style="position:relative;">
                            <img src="gambar/Rectangle 1473.png" alt="register" width="100px" height="30px" style="position :relative;">
                            <span class="navbar-font" style="position: absolute; top:50%; left:50%; transform:translate(-50%, -50%); color:white;">Registrasi</span>    
                        </a>
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
    <div class="d-flex justify-content-center align-items-center judul-font" style="height: 150px;">
        <h1>Registrasi</h1>
    </div>
    <div class="d-flex justify-content-center">
        <form action="{{route('actionregistrasi')}}" class="row g-3" style="width: 1000px" method="POST" id="formulir" onsubmit="return validateForm()">
            @csrf
            <div class="col-6 mb-3">
                <label for="nama" style="font-weight: bold;" class="mb-3">Nama</label>
                <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan Nama" required>
            </div>
            <div class="col-6 mb-3">
                <label for="nomor" style="font-weight: bold;" class="mb-3">Nomor Telepon</label>
                <input type="text" id="nomor_telepon" name="nomor_telepon" class="form-control" placeholder="Masukkan Nomor Telepon" required>
            </div>
            <div class="col-6 mb-3">
                <label for="alamat" style="font-weight: bold;" class="mb-3">Alamat</label>
                <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat" required>
            </div>
            <div class="col-6 mb-3">
                <label for="username" style="font-weight: bold;" class="mb-3">Username</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan Username" required>
            </div>
            <div class="col-6 mb-3">
                <label for="kecamatan" class="mb-3" style="font-weight: bold;">Kecamatan</label>
                <select name="kecamatan" id="kecamatan" class="form-select" required>
                    <option value="" disabled selected hidden>Pilih Kecamatan</option>
                    <option value="Pakusari">Pakusari</option>
                    <option value="Kaliwates">Kaliwates</option>
                    <option value="Patrang">Patrang</option>
                    <option value="Sumbersari">Sumbersari</option>
                    <option value="Kebonsari">Kebonsari</option>
                </select>
            </div>
            <div class="col-6 mb-3">
                <label for="password" class="mb-3" style="font-weight: bold;">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password" required>
            </div>
            <div class="col-6 mb-3">
                <label for="kabupaten" class="mb-3" style="font-weight: bold;">Kabupaten</label>
                <select name="kabupaten" id="kabupaten" class="form-select" required>
                    <option value="" disabled selected hidden>Pilih Kabupaten</option>
                    <option value="Jember">Jember</option>
                    <option value="Banyuwangi">Banyuwangi</option>
                    <option value="Bondowoso">Bondowoso</option>
                    <option value="Sidoarjo">Sidoarjo</option>
                    <option value="Lumajang">Lumajang</option>
                    <option value="Malang">Malang</option>
                    <option value="Surabaya">Surabaya</option>
                </select>
            </div>
            <div class="col-6 mb-3">
                <label for="konfirmasi_password" class="mb-3" style="font-weight: bold;">Konfirmasi Password</label>
                <input type="password" class="form-control" name="konfirmasi_password" id="konfirmasi_password" placeholder="Masukkan Ulang Password" required>
                <span id="konfirmasiPasswordError" class="text-danger"></span>
            </div>
            <div class="col-6 mb-3">
                <label for="provinsi" class="mb-3" style="font-weight: bold;">Provinsi</label>
                <select name="provinsi" id="provinsi" class="form-select" required>
                    <option value="" disabled selected hidden>Pilih Provinsi</option>
                    <option value="Jawa Timur">Jawa Timur</option>
                    <option value="Jawa Barat">Jawa Barat</option>
                    <option value="Jawa Tengah">Jawa Tengah</option>
                </select>
            </div>
            <div class="col-6 mb-3">
                <button class="btn tombol-registrasi mt-4" type="submit">Registrasi</button>
            </div>
        </form>
    </div>
    {{-- <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog d-flex justify-content-center align-items-center">
          <div class="modal-content">
            <div class="card" style="border-color:brown">
              <div class="card-body text-center">
                  <img src="gambar/warning (1) 1.png" alt="" style="width: 50px;height:50px">
                  <h3>Apakah Anda Yakin?</h3>
                  <p>Semua data yang anda masukkan <br>akan tersimpan.</p>
                  <div class="d-flex justify-content-center align-item-center">
                      <div class="row">
                          <div class="col-6">
                              <button class="btn btn-secondary" type="button" style="width: 200px;" id="yaButton" >Ya</button>
                            </div>
                          <div class="col-6">
                              <button class="btn btn-danger" type="button" data-bs-dismiss="modal" style="width:200px" id="batalButton">Batal</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>
    <div class="modal fade" id="modal_berhasil" tabindex="-1" aria-labelledby="modal_simpan" aria-hidden="true">
        <div class="modal-dialog d-flex justify-content-center align-items-center">
          <div class="modal-content">
            <div class="card" style="border-color:brown">
              <div class="card-body text-center">
                <h3>Data Berhasil <br> Tersimpan</h3>
              </div>
            </div>
        </div>
        </div>
    </div> --}}
    <div class="d-flex" style="height:150px"></div>
    <div class="d-flex justify-content-center align-items-center flex-direction:column judul-font warna-footer" style="height: 250px;">
        <div class="row">
            <div class="col-4 mb-3">
                <div class="card warna-footer" style="width:350px;border-top:none;border-bottom:none;border-left:none;border-right:none;">
                    <div class="d-flex justify-content-center align-items-center">
                        <img src="gambar/Frame 28.png" alt="logo" width="240px">
                    </div>
                </div>
            </div>
            <div class="col-4 mb-3">
                <div class="card warna-footer" style="width:350px;border-top:none;border-bottom:none;border-left:none;border-right:none;">
                    <div class="card-body">
                        <div class="d-flex justify-content-center align-items-center">
                            <p class="card-title">
                                email : SI-SIP@gmail.com<br>
                                Phone : +6285 2366 69823
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 mb-3">
                <div class="card warna-footer" style="border-top:none;border-bottom:none;border-left:none;border-right:none;">
                    <div class="card-body">
                        <p class="card-title">Social Media</p>
                        <div class="row">
                            <div class="col-2 mb-3">
                                <img src="gambar/Facebook.png" alt="" width="50px" height="50px">
                            </div>
                            <div class="col-2 mb-3">
                                <img src="gambar/Twitter.png" alt="" width="50px" height="50px">
                            </div>
                            <div class="col-2 mb-3">
                                <img src="gambar/Instagram.png" alt="" width="50px" height="50px">
                            </div>
                            <div class="col-2 mb-3">
                                <img src="gambar/Linkedin.png" alt="" width="50px" height="50px">
                            </div>
                            <div class="col-2 mb-3">
                                <img src="gambar/Youtube.png" alt="" width="60px" height="60px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script> 
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
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
{{-- <script>
document.getElementById('showModalButton').addEventListener('click', function() {
    $('#myModal').modal('hide');
    $('#modal_berhasil').modal('show');
    setTimeout(function() {
        $('#modal_berhasil').modal('hide');
        $('#formulir').submit();
    }, 4000);
});

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
</script> --}}

</body>
</html>