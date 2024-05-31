<?php
include_once "../../function/koneksi.php";
if ($_GET['barang_id']) {
    $barang_id = $_GET['barang_id'];
    $hapus = mysqli_query($koneksi, "DELETE FROM barang WHERE barang_id='$barang_id'");
    if ($hapus) {
        header("location:../../index.php?page=my_profile&module=barang&action=list&notif=true");
    }
} 
?>