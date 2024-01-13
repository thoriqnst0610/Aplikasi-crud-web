<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah Barang</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php
if(!isset($_COOKIE['id_users']))
{
    header('Location: /../index.php');
}

?>
    <div class="register">
        <h2>Silahkan Tambah</h2>
        <form action="tambah-proses.php" method="post">
        <div class="register-input">
            <label>Nama Barang</label>
            <br>
            <input type="text" name="nama_barang" required>
        </div>
        <div class="register-input">
            <label>Tanggal Masuk</label>
            <br>
            <input type="date" name="tgl_masuk" min="1999-01-01" max="2025-01-01" required>
        </div>
        <div class="register-input">
            <label>Jenis</label>
            <br>
            <select name="jenis_barang">
                <option value="sabun">sabun</option>
                <option value="minyak">minyak</option>
                <option value="beras">beras</option>
                <option value="buah">buah</option>
            </select>
        </div>
        <div class="register-input">
            <label>Harga</label>
            <br>
            <input type="text" name="harga" required>
        </div>
        <div class="register-kirim">
            <button class="button"><a href="../admin/barang.php">Kembali</a></button>
            <button type="submit" class="button-1" name="register" value="simpan">simpan</button>
        </div>
        </form>
    </div>
</body>
</html>