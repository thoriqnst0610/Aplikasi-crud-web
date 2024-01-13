<?php

require"../koneksi.php";

if(!isset($_COOKIE['id_users']))
    {
        header('Location: /../index.php');
    }

$password = mysqli_real_escape_string($koneksi,$_POST['password_baru']);
$username = mysqli_real_escape_string($koneksi,$_POST['username']);
$password_hash = password_hash($password,PASSWORD_DEFAULT);
echo $username;
echo $password_hash;
$sql = "update users set password = '$password_hash' where username = '$username'";
$result = mysqli_query($koneksi,$sql);
header('Location: logout.php');