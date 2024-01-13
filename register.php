<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="register">
        <h2>Silahkan Register</h2>
        <form action="/registerasi/register-proses.php" method="post">
        <div class="register-input">
            <label>Nama</label>
            <br>
            <input type="text" name="nama" required>
        </div>
        <div class="register-input">
            <label>username</label>
            <br>
            <input type="text" name="username" required>
        </div>
        <div class="register-input">
            <label>Password</label>
            <br>
            <input type="text" name="password" required>
        </div>
        <div class="register-kirim">
            <button class="button"><a href="index.php">Kembali</a></button>
            <button type="submit" class="button-1" name="register" value="simpan">Register</button>
        </div>
        </form>
    </div>
</body>
</html>