<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pengajuan Surat Rekomendasi Mahasiswa</title>
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
            margin-top: 20px;
        }

        .content-header h2 {
            margin: 0;
        }

        .form-group label {
            font-weight: bold;
        }

        .form-control {
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            border-radius: 8px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-secondary {
            border-radius: 8px;
        }

    </style>
</head>

<body>
    <div class="top-navbar">
        <div class="logo-container">
            <img src="/assets/images/logo-ulm.png" alt="Logo">
            <div>
                <br>
                <h1>Fakultas Teknik</h1>
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
        <a href="/e-services" class="active">e-Services</a>
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
        <div class="content-header">
            <h2>Tambah Pengajuan Surat Rekomendasi Mahasiswa</h2>
        </div>

        <div class="content">
            <form action="/auth/store_pengajuan" method="post">
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= session()->get('name'); ?>" readonly>
                </div>
                <!-- Non Read only input name -->
                <!-- <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="" required>
                </div> -->
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" class="form-control" id="nim" name="nim" value="" required>
                </div>
                <div class="form-group">
                    <label for="prodi">Program Studi</label>
                    <input type="text" class="form-control" id="prodi" name="prodi" value="" required>
                </div>
                <div class="form-group">
                    <label for="phone">No. Handphone</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="" required>
                </div>
                <div class="form-group">
                    <label for="semester">Semester</label>
                    <select class="form-control" id="semester" name="semester" required>
                        <option value="">Pilih Semester</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tahun_akademik">Tahun Akademik</label>
                    <select class="form-control" id="tahun_akademik" name="tahun_akademik" required>
                        <option value="">Pilih Tahun Akademik</option>
                        <option value="2020/2021">2020/2021</option>
                        <option value="2021/2022">2021/2022</option>
                        <option value="2022/2023">2022/2023</option>
                        <option value="2023/2024">2023/2024</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="keperluan">Keperluan</label>
                    <select class="form-control" id="keperluan" name="keperluan" required>
                        <option value="">Pilih Keperluan</option>
                        <option value="Beasiswa">Beasiswa</option>
                        <option value="Lomba">Lomba</option>
                        <option value="Cuti Akademik">Cuti Akademik</option>
                        <option value="Keterlambatan Pembayaran UKT">Keterlambatan Pembayaran UKT</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="alasan">Alasan</label>
                    <input type="text" class="form-control" id="alasan" name="alasan" placeholder="Nama Beasiswa/Nama Lomba/Alasan Keterlambatan Pembayaran UKT" required>
                </div>
                <button type="submit" class="btn btn-primary">Kirim</button>
                <a href="/surat_rekomendasi_mahasiswa" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapc.api/bootstrap.min.js"></script>
</body>

</html>