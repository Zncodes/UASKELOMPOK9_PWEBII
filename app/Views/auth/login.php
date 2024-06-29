<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>Login Fakultas Teknik</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            height: 100vh;
        }

        .login-container {
            display: flex;
            width: 100%;
        }

        .login-image {
            width: 50%;
            background: url('/assets/images/bg-login.png') no-repeat center center;
            background-size: cover;
        }

        .login-form {
            width: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #ffffff;
        }

        .login-form-inner {
            width: 80%;
            max-width: 400px;
            text-align: center;
            position: relative;
        }

        .login-form-inner img {
            width: 80px;
            height: 80px;
            margin-bottom: 20px;
        }

        .login-form-inner h2 {
            margin-bottom: 10px;
        }

        .login-form-inner p {
            margin-bottom: 30px;
            color: #666;
        }

        .login-form-inner input[type="text"],
        .login-form-inner input[type="password"] {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding-right: 40px;
        }

        .login-form-inner button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        .login-form-inner button:hover {
            background-color: #0056b3;
        }

        .login-form-inner a {
            display: block;
            margin-top: 20px;
            color: #000;
            text-decoration: none;
        }

        .login-form-inner a:hover {
            text-decoration: underline;
        }

        .login-form-inner label {
            display: block;
            text-align: left;
            width: 100%;
            margin-bottom: 5px;
            color: #333;
        }

        .login-form-inner .required::after {
            content: '*';
            color: red;
            margin-left: 5px;
        }

        .toggle-password {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }

        .password-container {
            position: relative;
        }
=======
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">
    <title>Login</title>
    <style>
    body {
        font-family: 'Poppins', sans-serif;
        margin: 0;
        display: flex;
    }

    .left-side {
        width: 50%;
        height: 100vh;
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
    input[type="password"] {
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

    .forgot-password {
        display: block;
        text-align: right;
        text-decoration: none;
        margin-bottom: 10px;
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
    <div class="login-container">
        <div class="login-image"></div>
        <div class="login-form">
            <div class="login-form-inner">
                <img src="/assets/images/logo-ulm.png" alt="Logo Fakultas Teknik">
                <h2>Fakultas Teknik</h2>
                <p>Universitas Lambung Mangkurat</p>
                <h2>Login ke Akun Anda</h2>
                <p>Masukkan Username dan password untuk login!</p>
                <?php if (session()->getFlashdata('error')) : ?>
                    <div style="color: red; margin-bottom: 10px;">
                        <?= session()->getFlashdata('error') ?>
                    </div>
                <?php endif; ?>
                <form action="/auth/authenticate" method="post">
                    <?= csrf_field() ?>
                    <label for="username" class="required">Username</label>
                    <input type="text" id="username" name="username" placeholder="Masukkan Username" required>
                    <label for="password" class="required">Password</label>
                    <div class="password-container">
                        <input type="password" id="password" name="password" placeholder="Masukkan Password" required>
                        <span class="toggle-password" onclick="togglePasswordVisibility()">&#128065;</span>
                    </div>
                    <a href="#" style="text-align: right;">Lupa password?</a>
                    <button type="submit">Login</button>
                    <a href="/auth/register">Belum Mempunyai Akun? Daftar</a>
                </form>
            </div>
        </div>
    </div>
    <script>
        function togglePasswordVisibility() {
            var passwordField = document.getElementById('password');
            var toggleIcon = document.querySelector('.toggle-password');
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                toggleIcon.innerHTML = '&#128064;';
            } else {
                passwordField.type = 'password';
                toggleIcon.innerHTML = '&#128065;';
            }
        }
    </script>
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
        <h2 class="title">Login ke Akun Anda!</h2>
        <p class="subtitle">Masukkan Username dan password untuk login!</p>
        <form action="#">
            <div class="form-group">
                <label for="username" class="form-label">Username</label>
                <input type="text" id="username" placeholder="Masukkan Username" required>
            </div>
            <div class="form-group password-container">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" placeholder="Masukkan Password" required>
            </div>

            <button type="submit">Login</button>
            <a href="#" class="forgot-password">Lupa password?</a>
            <p class="signup">Belum Mempunyai Akun? <a href="#">Daftar</a></p>
        </form>
    </div>
>>>>>>> dfb4e01e65af662ea17450722e5bb95d83d5e4b6
</body>

</html>