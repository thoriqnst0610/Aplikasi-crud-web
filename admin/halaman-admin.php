<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <?php

    require"../koneksi.php";
    function rupiah($angka)
    {
        $hasil_rupiah = "Rp ".number_format($angka,2,',','.');
        return $hasil_rupiah;
    }

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
    <div class="tabel-crud">
        <h2>Selamat Datang Thoriq</h2>
        <div class="tampilan-tabel">
        <table>
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Tanggal Masuk</th>
                    <th>Jenis Barang</th>
                    <th>Harga</th>
                </tr>
            
                <?php
                
                require"../koneksi.php";

                $sql = "select id,nama_barang,tgl_masuk,jenis_barang,harga from barang limit 0,10";
                
                $sql_semua = "select id,nama_barang,tgl_masuk,jenis_barang,harga from barang";
                $result = mysqli_query($koneksi,$sql_semua);
                $halaman = 6; /* page halaman*/
                $page    =isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                $mulai    =($page>1) ? ($page * $halaman) - $halaman : 0;
                
                $resulsemua    =mysqli_query($koneksi,$sql_semua);
                $total = mysqli_num_rows($result);
                $pages = ceil($total/$halaman);

                ?>
                <?php
                 $tampilMas    =mysqli_query($koneksi,"SELECT * FROM barang LIMIT $mulai, $halaman");
                 $no    =$mulai+1;
                 while($mas    =mysqli_fetch_array($tampilMas)){ ?>
                    <tr >
                    <td><?= $no++ ?></td>
                    <td><?= $mas['nama_barang']?></td>
                    <td><?= $mas['tgl_masuk']?></td>
                    <td><?= $mas['jenis_barang']?></td>
                    <td><?= rupiah($mas['harga'])?></td>
                </tr>
                <?php } ?>
            </table>
            <br />
    <div style="font-weight:bold;">
        Paging
        <?php
            for ($i=1; $i<=$pages ; $i++){
        ?>
            <a href="barang.php?halaman=<?php echo $i; ?>" style="text-decoration:none">   <u><?php echo $i; ?></u></a>
        <?php
            }
        ?>
    </div>
    </div>
    <div class="footer">
        <p>&copy; Copyright 2023</p>
    </div>
</body>
</html>