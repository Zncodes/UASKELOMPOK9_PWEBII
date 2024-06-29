<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pengajuan Surat Rekomendasi Mahasiswa</title>
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
            margin-bottom: 20px;
        }

        .content-header h2 {
            margin: 0;
        }
        .content label{
            font-weight: bold;
        }

        .form-control-plaintext {
            background-color: #f8f9fa;
        }
        .back-link {
            display: inline-block;
            margin-bottom: 20px;
            text-decoration: none;
            color: #007bff;
            font-size: 16px;
        }

        .back-link:hover {
            text-decoration: underline;
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
    <a href="/surat_rekomendasi_mahasiswa" class="back-link">← Kembali</a>
        <div class="content-header">        
            <h2>Detail Pengajuan Surat Rekomendasi Mahasiswa</h2>
        </div>

        <div class="content">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>ID Pengajuan</label>
                        <input type="text" readonly class="form-control-plaintext" value="SRM-<?= $pengajuan['id'] ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Status Pengajuan</label>
                        <input type="text" readonly class="form-control-plaintext" value="<?= $pengajuan['status'] ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Tanggal Pengajuan</label>
                        <input type="text" readonly class="form-control-plaintext" value="<?= date('d F Y', strtotime($pengajuan['tanggal_pengajuan'])) ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" readonly class="form-control-plaintext" value="<?= $pengajuan['nama'] ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>NIM</label>
                        <input type="text" readonly class="form-control-plaintext" value="<?= $pengajuan['nim'] ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Program Studi</label>
                        <input type="text" readonly class="form-control-plaintext" value="<?= $pengajuan['prodi'] ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>No. Handphone</label>
                        <input type="text" readonly class="form-control-plaintext" value="<?= $pengajuan['phone'] ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Semester</label>
                        <input type="text" readonly class="form-control-plaintext" value="<?= $pengajuan['semester'] ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Tahun Akademik</label>
                        <input type="text" readonly class="form-control-plaintext" value="<?= $pengajuan['tahun_akademik'] ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Keperluan</label>
                        <input type="text" readonly class="form-control-plaintext" value="<?= $pengajuan['keperluan'] ?>">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Alasan</label>
                <textarea readonly class="form-control-plaintext"><?= $pengajuan['alasan'] ?></textarea>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapc.api/bootstrap.min.js"></script>
</body>

</html>