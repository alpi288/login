<?php
    include('koneksi.php');

    $id=$_POST['id'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $image=$_FILES["image"]['name'];
    $tmp_image=$_FILES["image"]['tmp_name'];

    $cek="SELECT image FROM tb_regristration WHERE id='$id'";
    $result=mysqli_query($koneksi, $cek);
    $cek_img = mysqli_fetch_array($result);

    if ($cek_img['image'] != '') {

        unlink($cek_img['image']);

    }

    $sql="UPDATE `tb_regristration` SET 
        `username`='$username', 
        `password`='$password', 
        `email`='$email', 
        `image`='$image' 
        WHERE (`id`='$id') LIMIT 1";

    $query=mysqli_query($koneksi, $sql);

        if($query && move_uploaded_file($tmp_image, $image)) {
            header("location:tampil_data.php");
        }
?>