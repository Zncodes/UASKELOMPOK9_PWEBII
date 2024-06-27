<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    </style>
</head>

<body>
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
        <h2 class="title">SUpriadi</h2>
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
</body>

</html>