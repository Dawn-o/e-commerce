<?php
include_once "../../function/koneksi.php";
if ($_GET['kategori_id']) {
    $kategori_id = $_GET['kategori_id'];
    $hapus = mysqli_query($koneksi, "DELETE FROM kategori WHERE kategori_id='$kategori_id'");
    if ($hapus) {
        header("location:../../index.php?page=my_profile&module=kategori&action=list&notif=true");
    }
} 
?>