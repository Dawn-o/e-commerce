<?php
include_once "../../function/koneksi.php";
if ($_GET['user_id']) {
    $user_id = $_GET['user_id'];
    $hapus = mysqli_query($koneksi, "DELETE FROM user WHERE user_id='$user_id'");
    if ($hapus) {
        header("location:../../index.php?page=my_profile&module=user&action=list&notif=true");
    }
} 
?>