<?php

include_once("function/koneksi.php");
include_once("function/helper.php");

$email = $_POST['email'];
$password = md5($_POST['password']);

$query = $koneksi->query("SELECT * FROM user WHERE email='$email' AND password='$password' and status='on'");

if ($query->num_rows == 0) {
    header("location:" . BASE_URL . "index.php?page=login&notif=true");
} else {
    $row = $query->fetch_assoc();
    
    session_start();

    $_SESSION['user_id'] = $row['user_id'];
    $_SESSION['nama'] = $row['nama'];
    $_SESSION['level'] = $row['level'];
    if ($level == 'customer') {
        $_SESSION['level'] = 'customer';
    }

    if (isset($_SESSION["proses_pesanan"])) {
        unset($_SESSION['proses_pesanan']);
        header("location: " . BASE_URL . "index.php?page=data_pemesan");
    } else if (isset($_SESSION["cart"])) {
        unset($_SESSION["cart"]);
        header("location: " . BASE_URL . "index.php#shopping");
    } else {
        header("location:" . BASE_URL . "index.php?page=my_profile&module=pesanan&action=list");
    }
}
