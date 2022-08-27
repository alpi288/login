<?php
    include('koneksi.php');
    session_start();

    $username=$_POST['username'];
    $password=$_POST['password'];

    $q_sql="SELECT * FROM tb_regristration
            WHERE username ='$username' AND password ='$password'";

    $result=mysqli_query($koneksi, $q_sql);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION["login"] = true;

       
        header("location:tampil_data.php");
    }else{
        header("location:index.php");
    }
?>