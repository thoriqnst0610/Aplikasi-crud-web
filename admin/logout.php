<?php

require"../koneksi.php";


if(!isset($_COOKIE['id_users']))
    {
        header('Location: /../index.php');
    }

$data_id = $_COOKIE['id_users'];
$sql = "delete from sessions where id_users = '$data_id'";

$result = mysqli_query($koneksi,$sql);
setcookie("id_users","",0,'/');
header('Location: ../index.php');
exit();
