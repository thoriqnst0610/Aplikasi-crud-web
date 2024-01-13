<?php

require"../koneksi.php";
if(!isset($_COOKIE['id_users']))
    {
        header('Location: /../index.php');
    }

if(!isset($_POST['nama_barang']) or !isset($_POST['tgl_masuk']) or !isset($_POST['jenis_barang']) or !isset($_POST['harga']))
{
    header('Location: ../index.php');
    exit();
}
$nama_barang = mysqli_real_escape_string($koneksi,$_POST['nama_barang']);
$tgl_masuk = mysqli_real_escape_string($koneksi,$_POST['tgl_masuk']);
$jenis_barang = mysqli_real_escape_string($koneksi,$_POST['jenis_barang']);
$harga = mysqli_real_escape_string($koneksi,$_POST['harga']);

$tgl = date('y-m-d', strtotime($tgl_masuk));

$sql = "insert into barang(nama_barang,tgl_masuk,jenis_barang,harga) value('$nama_barang','$tgl_masuk','$jenis_barang','$harga')";
$result = mysqli_query($koneksi,$sql);
header('Location: ../admin/barang.php');
exit();