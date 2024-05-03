<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Register Page</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/css/style-login.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>

    <div class="login-container">
        <div class="login-box">
            <h2>Login</h2>
            <form action="<?= urlpath('dashboard');?>" method="post">
                <div class="input-group">
                    <i class="fas fa-user"></i>
                    <input type="text" name="username" placeholder="Username" required>
                </div>
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <button type="submit">Login</button>
                <div class="register-link">
                    Belum punya akun? <a href="<?= urlpath('registrasi');?>">Daftar sekarang</a>
                </div>
            </form>
        </div>
    </div>

</body>

</html>