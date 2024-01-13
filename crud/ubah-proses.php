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
$id = mysqli_real_escape_string($koneksi,$_POST['id']);
$nama_barang = mysqli_real_escape_string($koneksi,$_POST['nama_barang']);
$tgl_masuk = mysqli_real_escape_string($koneksi,$_POST['tgl_masuk']);
$jenis_barang = mysqli_real_escape_string($koneksi,$_POST['jenis_barang']);
$harga = mysqli_real_escape_string($koneksi,$_POST['harga']);

$tgl = date('y-m-d', strtotime($tgl_masuk));

$sql = "update  barang set nama_barang='$nama_barang', tgl_masuk='$tgl_masuk', jenis_barang='$jenis_barang', harga='$harga' where id='$id'";
$result = mysqli_query($koneksi,$sql);
header('Location: ../admin/barang.php');
exit();