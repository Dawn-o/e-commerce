<?php

include_once("function/koneksi.php");
include_once("function/helper.php");

$level = "customer";
$status = "on";
$nama = $_POST['nama'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$alamat = $_POST['alamat'];
$password = $_POST['password'];
$re_password = $_POST['re_password'];

unset($_POST['password']);
unset($_POST['re_password']);
$dataForm = http_build_query($_POST);

$query = mysqli_query($koneksi, "SELECT * FROM user WHERE email = '$email'");

if (empty($nama) || empty($email) || empty($phone) || empty($alamat) || empty($password)) {
    header("location: " . BASE_URL . "index.php?page=register&notif=require&$dataForm");
}else if($password != $re_password){
    header("location: " . BASE_URL . "index.php?page=register&notif=password&$dataForm");
}else if($query->num_rows == 1){
    header("location: " . BASE_URL . "index.php?page=register&notif=email&$dataForm");
}else{
    $password = md5($password);
    $koneksi->query("INSERT INTO user (level, nama, email, alamat, phone, password, status) 
                                        VALUES ('$level', '$nama', '$email', '$alamat', '$phone', '$password', '$status')");

header("Location:" . BASE_URL . "index.php?page=login&notif=success&Action");
}
?>