<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php

    require'koneksi.php';

    if(isset($_COOKIE['id_users']))
    {
        header('Location: admin/halaman-admin.php');
        exit();
    }

    ?>
    
    <div class="login">
        <h2>Login Sistem</h2>
        <form action="admin/login-proses.php" method="post">
            <div class="login-input-username sama">
                <label for="username">
                <input type="text" name="username" id="username" value="username" required>
                </label>
                <br>
                
            </div>
            <div class="login-input-password sama">
                <label for="password">
                <input type="text" name="password" id="password" value="password">
                </label>
                <br>
                
            </div>
            <div class="kirim">
                <a href="register.php">belum punya akun?</a>
                <!-- <button  type="submit">masuk</button> -->
                <input type="submit" value="kirim" name="login">
            </div>
    </form>
    
    </div>
</body>
</html>