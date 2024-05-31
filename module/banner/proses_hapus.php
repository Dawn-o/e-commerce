<?php
include_once "../../function/koneksi.php";
if ($_GET['banner_id']) {
    $banner_id = $_GET['banner_id'];
    $hapus = mysqli_query($koneksi, "DELETE FROM banner WHERE banner_id='$banner_id'");
    if ($hapus) {
        header("location:../../index.php?page=my_profile&module=banner&action=list&notif=true");
    }
} 
?>