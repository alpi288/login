<?php
include('koneksi.php');

$username=$_POST["username"];
$password=$_POST["password"];
$email=$_POST["email"];
$cpassword=$_POST["cpassword"];
$image=$_FILES["image"]['name'];
$tmp_image=$_FILES["image"]['tmp_name'];

if($password==$cpassword){

    $q_sql="INSERT INTO `tb_regristration` (`username`, `password`, `email`, `image`) VALUES (
        '$username', 
        '$password', 
        '$email',
        '$image')";

    if (mysqli_query($koneksi, $q_sql) && move_uploaded_file($tmp_image, $image)) {
        header("location:index.php");
    }
}else{
    header("location:sign_up.php");
}

?>