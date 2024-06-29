<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    </style>
</head>

<body>
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
    </div>
</body>

</html>