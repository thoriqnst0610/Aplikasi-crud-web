<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php
    if(!isset($_COOKIE['id_users']))
    {
        header('Location: /../index.php');
    }
    ?>
    <div class="navbar-1">
        <div class="selamat">
            <ul>
                <li class="menu-item"><a href="halaman-admin.php">Home</a></li>
                <li class="menu-item"><a href="ubah-password.php">Password</a></li>
                <li class="menu-item"><a href="barang.php">Crud</a></li>
            </ul>
        </div>
        <div class="keluar">
            <button><a href="logout.php">Logout</a></button>
        </div>
    </div>
    <div class="ubah-password-lama">
        <h2>Halaman Ubah Password Lama</h2>
        <div class="ubah-password">
            <h2>UBAH PASSWORD</h2>
            <form action="ubah-password-proses.php" method="POST">
                <div class="bungkus">
                    <div class="ubah-password-input">
                        <label for="">Username</label>
                        <br>
                        <input type="text" name="username" required>
                    </div>
                    <div class="ubah-password-input">
                        <label for="">Password Baru</label>
                        <br>
                        <input type="text" name="password_baru" required>
                    </div>
                </div>
                <div class="password-button">
                    <button class="ubah-password-button">Simpan</button>
                </div>
            </form>
        </div>
        </div>
    </div>
    <div class="footer">
        <p>&copy; Copyright 2023</p>
    </div>
</body>
</html>