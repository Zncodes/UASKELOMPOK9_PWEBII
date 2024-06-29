<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>Register Fakultas Teknik</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            height: 150vh;
        }

        .register-container {
            display: flex;
            width: 100%;
        }

        .register-image {
            width: 50%;
            background: url('/assets/images/bg-login.png') no-repeat center center;
            background-size: cover;
        }

        .register-form {
            width: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #ffffff;
        }

        .register-form-inner {
            width: 80%;
            max-width: 400px;
            text-align: center;
            position: relative;
        }

        .register-form-inner img {
            width: 80px;
            height: 80px;
            margin-bottom: 20px;
        }

        .register-form-inner h2 {
            margin-bottom: 10px;
        }

        .register-form-inner p {
            margin-bottom: 30px;
            color: #666;
        }

        .register-form-inner input[type="text"],
        .register-form-inner input[type="password"],
        .register-form-inner input[type="email"] {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding-right: 40px;
        }

        .register-form-inner button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        .register-form-inner button:hover {
            background-color: #0056b3;
        }

        .register-form-inner a {
            display: block;
            margin-top: 20px;
            color: #000;
            text-decoration: none;
        }

        .register-form-inner a:hover {
            text-decoration: underline;
        }

        .register-form-inner label {
            display: block;
            text-align: left;
            width: 100%;
            margin-bottom: 5px;
            color: #333;
        }

        .register-form-inner .required::after {
            content: '*';
            color: red;
            margin-left: 5px;
        }
=======
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">
    <title>Register</title>
    <style>
    body {
        font-family: 'Poppins', sans-serif;
        margin: 0;
        display: flex;
    }

    .left-side {
        width: 50%;
        height: 155vh;
        background-image: url("https://i.imgur.com/pW4pK5W.png");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    .right-side {
        width: 50%;
        padding: 50px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .logo-container {
        display: flex;
        align-items: center;
        margin-bottom: 25px;
    }

    .logo {
        width: 100px;
        height: 100px;
        margin-right: 20px;
    }

    .title {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 0px;
    }

    .subtitle {
        font-size: 16px;
        margin-top: 10px;
        margin-bottom: 50px;
    }

    .form-group {
        display: flex;
        flex-direction: column;
        width: 100%;
        margin-bottom: 20px;
    }

    .form-label {
        font-weight: bold;
        margin-bottom: 5px;
    }

    input[type="text"],
    input[type="password"],
    input[type="number"],
    select
    {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    .password-container {   
        position: relative;
    }

    .password-show-button {
        position: absolute;
        top: 12px;
        right: 12px;
        cursor: pointer;
    }

    button {
        background-color: #0ea5e9;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        width: 70vh;
        font-size: 16px;
    }

    button:hover {
        opacity: 0.8;
    }

    .signup {
        display: block;
        text-align: center;
        font-size: 14px;
        color: #666;
        margin-top: 25px;
    }

    .signup a {
        text-decoration: none;
        font-weight: bold;
    }
>>>>>>> dfb4e01e65af662ea17450722e5bb95d83d5e4b6
    </style>
</head>

<body>
<<<<<<< HEAD
    <div class="register-container">
        <div class="register-image"></div>
        <div class="register-form">
            <div class="register-form-inner">
                <img src="/assets/images/logo-ulm.png" alt="Logo Fakultas Teknik">
                <h2>Fakultas Teknik</h2>
                <p>Universitas Lambung Mangkurat</p>
                <h2>Buat Sebuah Akun</h2>
                <p>Isi data diri dengan benar!</p>
                <form action="/auth/store" method="post">
                    <?= csrf_field() ?>
                    <label for="name" class="required">Nama Lengkap</label>
                    <input type="text" id="name" name="name" placeholder="Masukkan Nama Lengkap" required>
                    <label for="username" class="required">Username</label>
                    <input type="text" id="username" name="username" placeholder="Masukkan Username" required>
                    <label for="phone" class="required">No. Handphone</label>
                    <input type="text" id="phone" name="phone" placeholder="Masukkan No. Handphone" required>
                    <label for="email" class="required">Email</label>
                    <input type="email" id="email" name="email" placeholder="Masukkan Email" required>                    
                    <label for="password" class="required">Password</label>
                    <input type="password" id="password" name="password" placeholder="Masukkan Password" required>
                    <label for="confirm_password" class="required">Konfirmasi Password</label>
                    <input type="password" id="confirm_password" name="confirm_password" placeholder="Masukkan Konfirmasi Password" required>
                    <button type="submit">Daftar</button>
                    <a href="/auth/login">Sudah Mempunyai Akun? Login</a>
                </form>
            </div>
        </div>
=======
    <div class="left-side"></div>
    <div class="right-side">
        <div class="logo-container">
            <img src="https://i.imgur.com/sR58l49.png" alt="Logo" class="logo">
            <div>
                <span style="font-size: 24px; font-weight: bold;">Fakultas Teknik</span>
                <br>
                <span style="font-size: 18px;">Universitas Lambung Mangkurat</span>
            </div>
        </div>
        <h2 class="title">Buat Sebuah Akun</h2>
        <p class="subtitle">isi data diri dengan benar!</p>
        <form action="#">
            <div class="form-group">
                <label for="username" class="form-label">Nama Lengkap</label>
                <input type="text" id="username" placeholder="Masukkan Nama Lengkap" required>
            </div>
            <div class="form-group telephone">
                <label for="username" class="form-label">No. Telephone</label>
                <input type="number" id="username" placeholder="Masukkan Nomor Telephone" required>
            </div>
            <div class="form-group email">
                <label for="email" class="form-label">Email</label>
                <input type="text" id="username" placeholder="Masukkan Email" required>
            </div>
            <div class="form-group user">
                <label for="user" class="form-label">Masuk Sebagai</label>
                <label for="sub">Contoh</label>
                <select id="user" name="user" required>
                    <option value="Mahasiswa">Mahasiswa</option>
                </select>
            </div>
            <div class="form-group password-container">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" placeholder="Masukkan Password" required>
            </div>
            <div class="form-group password-confirm-container">
                <label for="password" class="form-label">Konfirmasi Password</label>
                <input type="password" id="password" placeholder="Masukkan Konfirmasi Password" required>
            </div>

            <button type="submit">Daftar</button>
            <p class="signup">Sudah Mempunyai Akun? <a href="#">Login</a></p>
        </form>
>>>>>>> dfb4e01e65af662ea17450722e5bb95d83d5e4b6
    </div>
</body>

</html>