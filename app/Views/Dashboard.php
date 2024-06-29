<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Fakultas Teknik</title>
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
            top: 60px; /* Adjusted to be below the top-navbar */
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
            font-size: 18px;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .card-body p {
            font-size: 12px;
            color: #666;
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
        <a href="#" class="dashboard-link active">Dashboard</a>
        <p>Layanan</p>
        <a href="/eservices">e-Services</a>
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
        <div class="alert alert-warning" role="alert">
            Kamu belum mengisi kuisioner pada periode semester ini. Silakan isi kuisioner <a href="#" class="alert-link">Disini</a>.
        </div>

        <div class="content-header">
            <h2 style="font-weight: bold;">Selamat Datang <?= session()->get('name'); ?>!</h2>
            <p>Di website ini kamu dapat mengajukan layanan dan mengecek status pengajuannya.</p>
        </div>

        <p class="mt-3">Ringkasan</p>
        <div class="card-deck">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">4</h5>
                    <p class="card-text">Layanan diajukan</p>
                </div>
            </div>
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">2</h5>
                    <p class="card-text">Menunggu persetujuan</p>
                </div>
            </div>
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">1</h5>
                    <p class="card-text">Layanan disetujui</p>
                </div>
            </div>
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">1</h5>
                    <p class="card-text">Layanan ditolak</p>
                </div>
            </div>
        </div>

        <p class="mt-5">Mungkin yang kamu butuhkan</p>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="/assets/images/skl.png" alt="Surat Keterangan Lulus">
                    <div class="card-body">
                        <h5 class="card-title">Surat Keterangan Lulus</h5>
                        <p class="card-text">Dapatkan Surat Kelulusan dengan Mudah Melalui Layanan Pengajuan Surat Keterangan Lulus Kami.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="/assets/images/SPI.png" alt="Surat Pengantar Izin PKL">
                    <div class="card-body">
                        <h5 class="card-title">Surat Pengantar Izin PKL</h5>
                        <p class="card-text">Persiapkan untuk Pengalaman Belajar di Dunia Nyata, Manfaatkan Layanan Pengajuan Surat Pengantar Izin PKL Kami.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="/assets/images/SPIP.png" alt="Surat Pengantar Izin Penelitian">
                    <div class="card-body">
                        <h5 class="card-title">Surat Pengantar Izin Penelitian</h5>
                        <p class="card-text">Manfaatkan Layanan Kami untuk Mempercepat Pengajuan Izin Penelitian dan Fokuslah Pada Penelitianmu.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="/assets/images/PD.png" alt="Permintaan Data MK/PKL/TA">
                    <div class="card-body">
                        <h5 class="card-title">Permintaan Data MK/PKL/TA</h5>
                        <p class="card-text">Pengajuan Surat Permintaan Data Mata Kuliah, PKL, dan Tugas Akhir Kini Lebih Cepat dan Mudah Melalui Layanan Kami.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="/assets/images/ST.png" alt="Surat Tugas KP/TA">
                    <div class="card-body">
                        <h5 class="card-title">Surat Tugas KP/TA</h5>
                        <p class="card-text">Pengajuan Surat Tugas untuk Kerja Praktek / Tugas Akhir Mahasiswa Fakultas Teknik Universitas Lambung Mangkurat.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="/assets/images/mbkm.png" alt="MBKM FT ULM">
                    <div class="card-body">
                        <h5 class="card-title">MBKM FT ULM</h5>
                        <p class="card-text">Informasi dan Pendaftaran untuk Penelitian dan Pengajuan Surat Tugas Pelaksanaan Program MBKM FT ULM.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> dfb4e01e65af662ea17450722e5bb95d83d5e4b6
