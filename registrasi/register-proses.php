<?php

require"../koneksi.php";

if(!isset($_POST['nama']) or !isset($_POST['username']) or !isset($_POST['password']))
{
    header('Location: ../index.php');
    exit();
}
$nama = mysqli_real_escape_string($koneksi,$_POST['nama']);
$username = mysqli_real_escape_string($koneksi,$_POST['username']);
$password = mysqli_real_escape_string($koneksi,$_POST['password']);
$password_hash = password_hash($password,PASSWORD_DEFAULT);

$sql = "select * from users where username = '$username'";
$hasil = mysqli_query($koneksi,$sql);
$hasils = mysqli_fetch_assoc($hasil);

if($hasils)
{
    echo"Username sudah ada,  ganti yang lain";
    echo'<br>';
    echo'<a href="../register.php">kembali</a>';
}else
{
    $sql = "insert into users(nama,username,password) value('$nama','$username','$password_hash')";
    $result = mysqli_query($koneksi,$sql);
    header('Location: ../index.php');
    exit();
}