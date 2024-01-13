<?php

require"../koneksi.php";

if(!isset($_COOKIE['id_users']))
    {
        header('Location: /../index.php');
    }

$id = $_GET['id'];
echo $id;

$sql = "delete from barang where id = '$id'";

$result = mysqli_query($koneksi,$sql);

header('Location: ../admin/barang.php');