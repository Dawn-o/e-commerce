<?php
include_once "../../function/koneksi.php";
if ($_GET['kota_id']) {
    $kota_id = $_GET['kota_id'];
    $hapus = mysqli_query($koneksi, "DELETE FROM kota WHERE kota_id='$kota_id'");
    if ($hapus) {
        header("location:../../index.php?page=my_profile&module=kota&action=list&notif=true");
    }
} 
?>