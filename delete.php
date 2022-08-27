<?php
    include('koneksi.php');

    $id=$_GET['id'];

    $sql="DELETE FROM `tb_regristration` WHERE (`id`='$id')";

    mysqli_query($koneksi, $sql);

    if(mysqli_query($koneksi, $sql)) {
        header("location:tampil_data.php");
    }
?>