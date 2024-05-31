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
        .tulisan{
            font-family: 'Inter', sans-serif;
        }
        .tulisan-promosi{
            font-family: 'Inter', sans-serif;
            font-weight: 600;
            font-size: 17px;
        }
        .progres{
            background-image: url('gambar/progres.png');
            background-size: cover;
            border: none;
            width: 84px;
            height: 30px;
        }
        .lihat_detail{
            background-image: url('gambar/lihat_detail.png');
            background-size: cover;
            border: none;
            width: 100px;
            height: 30px;
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
                        <a class="nav-link navbar-font" href="sertifikasi_admin">Sertifikasi</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link active navbar-font" href="promosi_admin">Promosi</a>
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
            <h1>Daftar Pengajuan Promosi</h1>
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center" style="height: 700px">
        <div class="card" style="height: 600px; width:1000px">
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="text-center align-middle">No</th>
                            <th class="text-center align-middle">Nama Usaha</th>
                            <th class="text-center align-middle">Nama Produk</th>
                            <th class="text-center align-middle">Harga</th>
                            <th class="text-center align-middle">Status Validasi</th>
                            <th class="text-center align-middle">Status Promosi</th>
                            <th class="text-center align-end"></th>
                        </tr>
                    </thead>
                    <tbody id="table-body">
                        <!-- Data akan dimasukkan di sini oleh JavaScript -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center" style="height: 100px">
        <nav>
            <ul class="pagination justify-content-center" id="pagination">
                <!-- Tautan paginasi akan dimasukkan di sini oleh JavaScript -->
            </ul>
        </nav>
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
    <!-- Custom JS for pagination -->
    <script>
        $(document).ready(function () {
            const rowsPerPage = 5;
            let currentPage = 1;
            let data = @json($promosi); // Mengambil data dari controller
    
            function renderTable(data, page) {
                $('#table-body').empty();
                let start = (page - 1) * rowsPerPage;
                let end = start + rowsPerPage;
                let paginatedData = data.slice(start, end);
    
                paginatedData.forEach((row, index) => {
                    let statusPromosiImage = '';
                    if (row.status_promosi === 'Aktif') {
                        statusPromosiImage = '<img src="gambar/aktif.png" style="width: 100px; height: 35px;">';  
                    } else if (row.status_promosi === 'Nonaktif') {
                        statusPromosiImage = '<img src="gambar/nonaktif.png" style="width: 100px; height: 35px;">';
                    }
                    let statusValidasiImage = '';
                    if (row.status_validasi === 'Diterima') {
                        statusValidasiImage = '<img src="gambar/diterima.png" style="width: 100px; height: 35px;">';  
                    } else if (row.status_validasi === 'Ditolak') {
                        statusValidasiImage = '<img src="gambar/ditolak.png" style="width: 100px; height: 35px;">';
                    }
                    let detailUrl = `{{ url('detail_pengajuan_promosi') }}?id=${row.id_promosi}`;
                    $('#table-body').append(`
                        <tr style="height: 85px">
                            <td class="text-center align-middle">${start + index + 1}</td>
                            <td class="text-center align-middle">${row.nama_usaha}</td>
                            <td class="text-center align-middle">${row.nama_produk}</td>
                            <td class="text-center align-middle">${row.harga}</td>
                            <td class="text-center align-middle">${statusValidasiImage}</td>
                            <td class="text-center align-middle">${statusPromosiImage}</td>
                            <td class="text-center align-middle">
                                <a href="${detailUrl}" class="btn lihat_detail" role="button"></a>
                            </td>
                        </tr>
                    `);
                });
            }
    
            function renderPagination(data, page) {
                $('#pagination').empty();
                let totalPages = Math.ceil(data.length / rowsPerPage);
    
                $('#pagination').append(`
                    <li class="page-item ${page === 1 ? 'disabled' : ''}">
                        <a class="page-link" href="#" aria-label="Previous" id="prev-page">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                `);
    
                for (let i = 1; i <= totalPages; i++) {
                    $('#pagination').append(`
                        <li class="page-item ${i === page ? 'active' : ''}">
                            <a class="page-link" href="#">${i}</a>
                        </li>
                    `);
                }
    
                $('#pagination').append(`
                    <li class="page-item ${page === totalPages ? 'disabled' : ''}">
                        <a class="page-link" href="#" aria-label="Next" id="next-page">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                `);
    
                $('.page-link').on('click', function (e) {
                    e.preventDefault();
                    let newPage = $(this).text();
                    if ($(this).attr('aria-label') === 'Previous') {
                        currentPage = currentPage > 1 ? currentPage - 1 : 1;
                    } else if ($(this).attr('aria-label') === 'Next') {
                        currentPage = currentPage < totalPages ? currentPage + 1 : totalPages;
                    } else {
                        currentPage = parseInt(newPage);
                    }
                    renderTable(data, currentPage);
                    renderPagination(data, currentPage);
                });
            }
    
            renderTable(data, currentPage);
            renderPagination(data, currentPage);
        });
    </script>         
</body>
</html>