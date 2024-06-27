<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            height: 100vh;
            overflow: hidden;
            /* To prevent scrolling if content overflows */
        }

        .container {
            display: flex;
            width: 100%;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #f0f0f0;
            width: 100%;
            position: fixed;
            top: 0;
            z-index: 1000;
            height: 70px;
            box-sizing: border-box;
        }

        .header-left {
            display: flex;
            align-items: center;
        }

        .logo {
            height: 50px;
            margin-right: 10px;
        }

        .title {
            font-weight: bold;
        }

        .header-right {
            display: flex;
            align-items: center;
        }

        .user-info {
            display: flex;
            align-items: center;
        }

        .profile-picture {
            height: 40px;
            width: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .notification-icon img {
            height: 24px;
        }

        .search-box {
            position: relative;
            display: flex;
            align-items: center;
            margin-right: 20px;
        }

        .search-box input {
            padding: 8px 12px;
            border: 1px solid #ccc;
            border-radius: 20px;
            font-size: 16px;
            color: #333;
        }

        .search-box button {
            background-color: transparent;
            border: none;
            padding: 8px;
            cursor: pointer;
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
        }

        .search-box button img {
            height: 18px;
        }

        aside {
            width: 200px;
            background-color: #2d3e50;
            color: white;
            height: calc(100vh - 70px);
            /* Adjust to account for the fixed header */
            padding: 20px 0;
            position: fixed;
            top: 70px;
            /* To start below the fixed header */
            overflow-y: auto;
        }

        nav ul {
            list-style: none;
            padding: 0;
        }

        nav ul li {
            margin: 10px 0;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            display: block;
            transition: background-color 0.3s; /* Add transition for smooth background change */
        }

        nav ul li a.active {
            background-color: #1f2c39; /* Change the background color for active item */
        }

        main {
            margin-left: 200px;
            padding: 90px 20px 20px;
            /* Adjust padding to account for the fixed header */
            flex-grow: 1;
            overflow-y: auto;
            /* Allow main content to scroll if necessary */
            height: calc(100vh - 70px);
            /* Adjust to account for the fixed header */
            box-sizing: border-box;
        }

        .dashboard {
            margin-bottom: 20px;
        }

        .alert {
            background-color: #ffdddd;
            border-left: 6px solid #f44336;
            padding: 10px;
            margin-bottom: 20px;
        }

        .welcome {
            background-color: #e7f3fe;
            border-left: 6px solid #2196F3;
            padding: 10px;
            margin-bottom: 20px;
        }

        .summary {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }

        .card {
            background-color: #f0f0f0;
            padding: 10px;
            text-align: center;
            flex: 1;
        }
        .content-all{
            display: flex;
            flex-direction: row;
            gap: 10px;
            width: 100%;
            height: 100%;
            margin-bottom: 20px;
        }
        .content-card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
            display: flex;
            flex-direction: column;
            width: 100%;
            gap: 15px;
        }

        .content-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
        }

        .content-card h3 {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 10px;
            font-size: large;
        }

        .content-card p {
            line-height: 1.5;
            font-size: small;
        }

        .content-card a {
            text-decoration: none;
            color: #2196F3;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <div class="header-left">
                <img src="https://i.imgur.com/sR58l49.png" alt="Logo" class="logo">
                <span class="title">Fakultas Teknik<br>Universitas Lambung Mangkurat</span>
            </div>
            <div class="header-right">
                <div class="search-box">
                    <input type="text" placeholder="Cari Layanan...">
                    <button>
                        <img src="https://i.imgur.com/QmO4o13.png" alt="Search">
                    </button>
                </div>
                <div class="notification-icon">
                    <img src="https://i.imgur.com/y4hB1wZ.png" alt="Notifications">
                </div>
                <div class="user-info">
                    <img src="https://i.imgur.com/jB6xK7T.png" alt="User Profile" class="profile-picture">
                    <span class="user-name">Maulana</span>
                </div>
            </div>
        </header>
        <aside>
            <nav>
                <ul>
                    <li>
                        <a href="#" class="active">
                            <img src="https://i.imgur.com/3R60t4D.png" alt="Dashboard Icon">
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="https://i.imgur.com/4i504fY.png" alt="e-Services Icon">
                            e-Services
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="https://i.imgur.com/5wZ6eY6.png" alt="e-Command Center Icon">
                            e-Command Center
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="https://i.imgur.com/y2rT36h.png" alt="e-Response Icon">
                            e-Response
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="https://i.imgur.com/hC49w9S.png" alt="e-Commerce Icon">
                            e-Commerce
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="https://i.imgur.com/k23vZ46.png" alt="e-Office Icon">
                            e-Office
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="https://i.imgur.com/s3F5T8T.png" alt="Kuisioner Icon">
                            Kuisioner
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="https://i.imgur.com/X9l7s5b.png" alt="FAQ Icon">
                            FAQ
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="https://i.imgur.com/C5G3B8x.png" alt="Profile Icon">
                            Profile
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>
        <main>
            <div class="dashboard">
                <div class="alert">
                    <p>Kamu belum mengisi kuisioner pada periode semester ini, Silahkan isi Kuisioner <a
                            href="#">Disini</a></p>
                    <p>Kamu tidak dapat melakukan pengajuan layanan jika belum mengisi kuisioner. Oleh karena itu, kami mengharapkan agar setiap mahasiswa mengisi kuisioner
                        pada awal setiap semester sebagai bagian dari proses yang diperlukan untuk memberikan pelayanan yang terbaik dan peningkatan kualitas serta evaluasi
                        layanan FT ULM.</p>
                </div>
                <div class="welcome">
                    <h1>Selamat Datang Maulana!</h1>
                    <p>Di website ini kamu dapat mengajukan layanan dan mengecek status pengajuannya</p>
                </div>
                <div class="summary">
                    <div class="card">
                        <p>4</p>
                        <span>Layanan diajukan</span>
                    </div>
                    <div class="card">
                        <p>2</p>
                        <span>Menunggu persetujuan</span>
                    </div>
                    <div class="card">
                        <p>1</p>
                        <span>Layanan disetujui</span>
                    </div>
                    <div class="card">
                        <p>1</p>
                        <span>Layanan ditolak</span>
                    </div>
                </div>

                <!-- Content Cards -->
                <div class ="content-all">
                <div class="content-card">
                    <img src="https://i.imgur.com/M3hX48u.png" alt="Content Card Image">
                    <h3>Surat Keterangan Lulus</h3>
                    <p>Dapatkan Surat Kelulusanmu dengan Mudah Melalui Layanan Pengajuan Surat Keterangan Lulus Kami.</p>
                    <!-- <a href="#">Ajukan Sekarang</a> -->
                </div>

                <div class="content-card">
                    <img src="https://i.imgur.com/N2h2p7g.png" alt="Content Card Image">
                    <h3>Surat Pengantar Izin PKL</h3>
                    <p>Bersiaplah untuk Pengalaman Belajar di Dunia Nyata, manfaatkan Layanan Pengajuan Surat Pengantar Izin PKL kami.</p>
                    <!-- <a href="#">Ajukan Sekarang</a> -->
                </div>

                <div class="content-card">
                    <img src="https://i.imgur.com/6V6Y4T3.png" alt="Content Card Image">
                    <h3>Surat Pengantar Izin Penelitian</h3>
                    <p>Manfaatkan layanan kami untuk mempercepat proses pengajuan Surat Pengantar Izin Penelitian dan fokuslah pada penelitianmu.</p>
                    <!-- <a href="#">Ajukan Sekarang</a> -->
                </div>
                </div>

                <div class ="content-all">
                <div class="content-card">
                    <img src="https://i.imgur.com/iZv6c83.png" alt="Content Card Image">
                    <h3>Permintaan Data MK/PKL/TA</h3>
                    <p>Pengajuan Surat Permintaan Data Mata Kuliah / Prakter Kerja Lapangan / Tugas Akhir Mahasiswa FT ULM.</p>
                    <!-- <a href="#">Ajukan Sekarang</a> -->
                </div>

                <div class="content-card">
                    <img src="https://i.imgur.com/b2xO1mD.png" alt="Content Card Image">
                    <h3>Surat Tugas KP/TA</h3>
                    <p>Pengajuan Surat Tugas untuk Kerja Praktek / Tugas Akhir Mahasiswa Fakultas Teknik Universitas Lambung Mangkurat.</p>
                    <!-- <a href="#">Ajukan Sekarang</a> -->
                </div>

                <div class="content-card">
                    <img src="https://i.imgur.com/eH1nD7r.png" alt="Content Card Image">
                    <h3>MBKM FT ULM</h3>
                    <p>Layanan ini digunakan untuk pendataan dan penerbitan Surat Tugas pelaksanaan program MBKM FT ULM.</p>
                    <!-- <a href="#">Ajukan Sekarang</a> -->
                </div>
                </div>              
            </div>
        </main>
    </div>
</body>
</html>