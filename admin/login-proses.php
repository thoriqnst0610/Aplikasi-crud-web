<?php


    require"../koneksi.php";

    if(!isset($_COOKIE['id_users']))
    {
        header('Location: /../index.php');
    }

    if(!isset($_POST['username']))
    {
        header('Location: ../index.php');
        exit();
    }elseif(!isset($_POST['password'])){
        header('Location: ../index.php');
        exit();
    }

    $username = mysqli_real_escape_string($koneksi,$_POST['username']);
    $password = mysqli_real_escape_string($koneksi,$_POST['password']);

    $sql = "select id,username, password from users where username = '$username'";
    $result = mysqli_query($koneksi,$sql);
    foreach($result as $key)
    {
        $id = $key['id'];
        $username_sql = $key['username'];
        $password_sql = $key['password'];
    }

    if($username != $username_sql or !password_verify($password,$password_sql))
    {
        header('Location: /../index.php');
        exit();
    }else{
        $sql = "insert into sessions(id_users) value('$id')";
        $result = mysqli_query($koneksi,$sql);
        setcookie("id_users",$id, time() + (60 * 60 * 24 * 5), '/');
        header('Location: halaman-admin.php');
        exit();
    }


    ?>