<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Rekomendasi Mahasiswa</title>
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

        .content {
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .content img {
            max-width: 100%;
            border-radius: 8px;
        }

        .content .description {
            margin-top: 20px;
        }

        .content .description p {
            font-size: 14px;
            color: #666;
            margin-bottom: 10px;
        }

        .content .description h5 {
            font-size: 16px;
            margin-bottom: 10px;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .table-responsive {
            margin-top: 20px;
        }

        .back-link {
            display: inline-block;
            margin-bottom: 20px;
            text-decoration: none;
            color: #007bff;
            font-size: 16px;
            font-weight: bold;
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
        <div class="content">
            <br>
        <a href="/eservices" class="back-link">← Kembali</a>
            <div style="display: flex; align-items: center;">
                <img src="/assets/images/SRM.png" alt="Surat Rekomendasi Mahasiswa" style="margin-right: 20px; width: 200px;">
                <div>
                    <h5 style="font-weight: bold;">Surat Rekomendasi Mahasiswa</h5>
                    <p>Pengajuan Surat Rekomendasi untuk beberapa keperluan seperti keperluan Lomba, Beasiswa, Pengajuan Cuti Akademik, dan lainnya.</p>
                </div>
            </div>
            <div class="description">
                <h5>Deskripsi</h5>
                <p>Layanan Pengajuan Surat Rekomendasi Mahasiswa adalah sistem yang disediakan untuk memfasilitasi
                    mahasiswa yang membutuhkan surat rekomendasi untuk keperluan seperti Penggantian KTM (Kartu
                    Tanda Mahasiswa), Pengajuan Cuti Akademik, Pengambilan Ijazah lebih awal, Pengajuan Dispensasi
                    Keterlambatan Pembayaran UKT/SPP, Pindah Kuliah, Pengunduran Diri Mahasiswa, Mengikuti Lomba
                    Mahasiswa, Pengajuan Beasiswa, dan Pembuatan VISA.</p>

                <h5>Alur Pengajuan</h5>
                <p>1. Mahasiswa mengisi data formulir</p>
                <p>2. Admin Akademik memeriksa data dan kelengkapan berkas</p>
                <p>3. WD 1 menyetujui pengajuan</p>
                <p>4. Surat siap didownload oleh Mahasiswa</p>

                <div class="table-responsive">
                    <h5>Tabel Pengajuan</h5>
                    <a href="/tambah_pengajuan" class="btn btn-primary btn-sm">+ Tambah Pengajuan</a>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID Pengajuan</th>
                                <th>Jenis Pengajuan</th>
                                <th>Tanggal Pengajuan</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(count($pengajuan) > 0): ?>
                            <?php foreach($pengajuan as $key => $item): ?>
                            <tr>
                                <td><?= $key+1 ?></td>
                                <td>SRM-<?= $item['id'] ?></td>
                                <td><?= $item['keperluan'] ?></td>
                                <td><?= date('d F Y', strtotime($item['tanggal_pengajuan'])) ?></td>
                                <!-- karena hanya pada level mahasiswa saja -->
                                <td><span class="badge badge-warning">Diproses</span></td>
                                <td>
                                    <a href="/pengajuan/detail/<?= $item['id'] ?>"
                                        class="btn btn-info btn-sm">Detail</a>
                                    <button class="btn btn-warning btn-sm">Lacak</button>
                                    <button class="btn btn-success btn-sm">Unduh</button>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            <?php else: ?>
                            <tr>
                                <td colspan="6" class="text-center">Belum Ada Pengajuan</td>
                            </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>