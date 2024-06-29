<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan e-Services</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <style>
    body {
        font-family: "Poppins", sans-serif;
        margin: 0;
        padding: 0;
    }

    .sidebar {
        height: 100vh;
        width: 200px;
        position: fixed;
        top: 60px;
        /* Adjusted to be below the top-navbar */
        left: 0;
        background-color: #f8f9fa;
        padding-top: 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .sidebar p {
        font-size: 12px;
        text-align: center;
        margin-top: 10px;
    }

    .sidebar a {
        padding: 10px 0;
        text-decoration: none;
        font-size: 16px;
        font-weight: bold;
        color: #333;
        text-align: center;
        width: 100%;
    }

    .sidebar a:hover {
        background-color: #ddd;
    }

    .sidebar a.active {
        background-color: #26aeeb;
        color: white;
    }

    .main-content {
        margin-left: 250px;
        padding: 20px;
        margin-top: 80px;
    }

    .top-navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 12px;
        background-color: #fff;
        border-bottom: 1px solid #ddd;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 1000;
    }

    .top-navbar .logo-container {
        display: flex;
        align-items: center;
    }

    .top-navbar img {
        width: 40px;
        height: auto;
        margin-right: 10px;
    }

    .top-navbar h1 {
        font-size: 14px;
        margin: 0;
    }

    .top-navbar .search-bar {
        flex-grow: 1;
        margin-left: 20px;
        margin-right: 20px;
    }

    .top-navbar .search-bar input {
        width: 100%;
        padding: 5px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    .top-navbar .icons {
        display: flex;
        align-items: center;
    }

    .top-navbar .icons img {
        border-radius: 50%;
        width: 30px;
        height: 30px;
        margin-left: 20px;
    }

    .top-navbar .icons span {
        margin-left: 10px;
    }

    .content-header {
        background-color: #26aeeb;
        color: white;
        padding: 20px;
        border-radius: 5px;
        margin-bottom: 20px;
        margin-top: 0px;
    }

    .content-header h2 {
        margin: 0;
    }

    .card {
        margin-bottom: 20px;
        border-radius: 10px;
    }

    .card img {
        width: 100%;
        height: auto;
        border-radius: 10px 10px 0 0;
    }

    .card-body h5 {
        font-size: 15px;
        margin-bottom: 10px;
        font-weight: bold;
    }

    .card-body p {
        font-size: 12px;
        color: #666;
    }

    .card a {
        text-decoration: none;
        color: black;
    }

    .alert {
        margin-bottom: 20px;
    }

    .card:hover {
        opacity: 80%;
        background-color: white;
    }
    </style>
</head>

<body>
    <div class="top-navbar">
        <div class="logo-container">
            <img src="/assets/images/logo-ulm.png" alt="Logo">
            <div>
                <br>
                <h1 style="font-weight: bold;">Fakultas Teknik</h1>
                <p>Universitas Lambung Mangkurat</p>
            </div>
        </div>
        <div class="search-bar">
            <input type="text" placeholder="Cari Layanan...">
        </div>
        <div class="icons">
            <img src="/assets/images/profile.png" alt="Profile">
            <span> <?= session()->get('name'); ?></span>
        </div>
    </div>

    <div class="sidebar">
        <br>
        <p>Menu</p>
        <a href="/dashboard">Dashboard</a>
        <p>Layanan</p>
        <a href="/eservices" class="active">e-Services</a>
        <a href="#">e-Command Center</a>
        <a href="#">e-Response</a>
        <a href="#">e-Office</a>
        <p>Other</p>
        <a href="#">Kuesioner</a>
        <a href="#">FAQ</a>
        <a href="#">Profile</a>
        <a href="/auth/logout">Logout</a>
    </div>

    <div class="main-content">
        <br>
        <div class="content-header">
            <h2>Layanan e-Services</h2>
            <p>Inovasi Layanan Publik Eksternal/Internal FT ULM</p>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="card service-card">
                    <img src="/assets/images/layanan1.jpg" alt="Layanan 1">
                    <div class="card-body">
                        <h5 class="card-title">Izin Penelitian TA di Lab FT</h5>
                        <p class="card-text">Dapatkan izin untuk melakukan penelitian TA di laboratorium FT ULM.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card service-card">
                    <img src="/assets/images/layanan2.jpg" alt="Layanan 2">
                    <div class="card-body">
                        <h5 class="card-title">Kendali Kegiatan Ormawa</h5>
                        <p class="card-text">Mengajukan izin dan mengelola kegiatan organisasi mahasiswa FT ULM.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card service-card">
                    <img src="/assets/images/layanan3.jpg" alt="Layanan 3">
                    <div class="card-body">
                        <h5 class="card-title">Keterangan Bebas Lab & Perpus</h5>
                        <p class="card-text">Permintaan surat keterangan bebas lab dan perpustakaan FT ULM.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card service-card">
                    <img src="/assets/images/layanan4.jpg" alt="Layanan 4">
                    <div class="card-body">
                        <h5 class="card-title">Kotak Pos FT</h5>
                        <p class="card-text">Layanan ini disediakan untuk memberikan kemudahan bagi para pihak dalam menjalin komunikasi dengan pihak FT ULM</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card service-card">
                    <img src="/assets/images/layanan5.jpg" alt="Layanan 5">
                    <div class="card-body">
                        <h5 class="card-title">Legalisir Akreditasi Program Studi</h5>
                        <p class="card-text">Layanan ini digunakan untuk pengajuan Legalisir Akreditasi Program Studi untuk kebutuhan Dokumen Legal Bertanda Tangan</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card service-card">
                    <img src="/assets/images/layanan6.jpg" alt="Layanan 6">
                    <div class="card-body">
                        <h5 class="card-title">Legalisir ljazah</h5>
                        <p class="card-text">Layanan ini digunakan untuk pengajuan Legalisir ljazah secara online dan dapat diambil secara offline atau dikirim melalui COD</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card service-card">
                    <img src="/assets/images/layanan7.jpg" alt="Layanan 7">
                    <div class="card-body">
                        <h5 class="card-title">Legalisir Transkrip Akademik</h5>
                        <p class="card-text">Layanan ini digunakan untuk pengajuan Legalisir Transkrip Nilai secara online dan dapat diambil secara offline atau melalui COD.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card service-card">
                    <img src="/assets/images/layanan8.jpg" alt="Layanan 8">
                    <div class="card-body">
                        <h5 class="card-title">MBKM FT ULM</h5>
                        <p class="card-text">Layanan ini digunakan untuk pendataan dan penerbitan Surat Tugas pelaksanaan program MBKM FT ULM</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card service-card">
                    <img src="/assets/images/layanan9.jpg" alt="Layanan 9">
                    <div class="card-body">
                        <h5 class="card-title">Permintaan Data MK/PKL/TA</h5>
                        <p class="card-text">Pengajuan Surat Permintaan Data Mata Kuliah / Prakter Kerja Lapangan / Tugas Akhir Mahasiswa FT ULM</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card service-card">
                    <img src="/assets/images/layanan10.jpg" alt="Layanan 10">
                    <div class="card-body">
                        <h5 class="card-title">Permintaan Tenaga Ahli</h5>
                        <p class="card-text">DLayanan Pengajuan permintaan tenaga ahli yang berada di lingkungan Fakultas Teknik Universitas Lambung Mangkurat</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card service-card">
                    <img src="/assets/images/layanan11.jpg" alt="Layanan 11">
                    <div class="card-body">
                        <h5 class="card-title">Perubahan Kategori UKT</h5>
                        <p class="card-text">Layanan ini digunakan untuk mahasiswa yang ingin mengajukan perubahan kategori UKT</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card service-card">
                    <img src="/assets/images/layanan12.jpg" alt="Layanan 12">
                    <div class="card-body">
                        <h5 class="card-title">Surat Aktif Kuliah</h5>
                        <p class="card-text">Layanan untuk mahasiswa yang ingin mendapatkan dokumen resmi surat aktif kuliah dari Fakultas Teknik ULM</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card service-card">
                    <img src="/assets/images/layanan13.jpg" alt="Layanan 13">
                    <div class="card-body">
                        <h5 class="card-title">Surat Keterangan ljazah/Transkrip</h5>
                        <p class="card-text">Layanan ini digunakan untuk pengajuan Surat Keterangan Kehilangan, Kerusakan atau Ralat Penulisan ijazah/transkrip</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card service-card">
                    <img src="/assets/images/layanan14.jpg" alt="Layanan 14">
                    <div class="card-body">
                        <h5 class="card-title">Surat Keterangan Lulus</h5>
                        <p class="card-text">Dapatkan Surat Kelulusanmu dengan Mudah Melalui Layanan Pengajuan Surat Keterangan Lulus Kami</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card service-card">
                    <img src="/assets/images/layanan15.jpg" alt="Layanan 15">
                    <div class="card-body">
                        <h5 class="card-title">Surat Pengantar Izin Penelitian</h5>
                        <p class="card-text">Manfaatkan layanan kami untuk mempercepat proses pengajuan Surat Pengantar Izin Penelitian dan fokuslah pada penelitianmu</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card service-card">
                    <img src="/assets/images/layanan16.jpg" alt="Layanan 16">
                    <div class="card-body">
                        <h5 class="card-title">Surat Pengantar Izin PKL</h5>
                        <p class="card-text">Bersiaplah untuk Pengalaman Belajar di Dunia Nyata, manfaatkan Layanan Pengajuan Surat Pengantar Izin PKL kami</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card service-card">
                    <a href="/surat_rekomendasi_mahasiswa">
                        <img src="/assets/images/SRM.png" alt="Layanan 17">
                        <div class="card-body">
                            <h5 class="card-title">Surat Rekomendasi Mahasiswa</h5>
                            <p class="card-text">Pengajuan Surat Rekomendasi untuk keperluan Penggantian KTM, Lomba, Beasiswa, Pengajuan Cuti Akademik, dan lainnya.</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card service-card">
                    <img src="/assets/images/layanan18.jpg" alt="Layanan 18">
                    <div class="card-body">
                        <h5 class="card-title">Surat Tugas</h5>
                        <p class="card-text">Layanan ini digunakan oleh dosen untuk mengajukan permohonan surat tugas secara online</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card service-card">
                    <img src="/assets/images/layanan19.jpg" alt="Layanan 19">
                    <div class="card-body">
                        <h5 class="card-title">Surat Tugas PKL/TA</h5>
                        <p class="card-text">Pengajuan Surat Tugas untuk Kerja Praktek / Tugas Akhir Mahasiswa Fakultas Teknik Universitas Lambung Mangkurat</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card service-card">
                    <img src="/assets/images/layanan20.jpg" alt="Layanan 20">
                    <div class="card-body">
                        <h5 class="card-title">Sertifikat Uji Plagiasi Artikel Jurnal TA</h5>
                        <p class="card-text">Pengajuan Sertifikat Uji Plagiasi Artikel/Jurnal/ Tugas Akhir Mahasiswa FT ULM sebagai persyaratan Wisuda Mahasiswa FT ULM.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card service-card">
                    <img src="/assets/images/layanan21.jpg" alt="Layanan 21">
                    <div class="card-body">
                        <h5 class="card-title">Ujian Tugas Akhir</h5>
                        <p class="card-text">Layanan ini digunakan oleh mahasiswa akhir yang sudah melakukan sidang tugas akhir untuk mengajukan lembar pengesahan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapc.api/bootstrap.min.js"></script>
</body>

</html>