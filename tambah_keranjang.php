<?php

include_once("function/koneksi.php");
include_once("function/helper.php");

session_start();

$notif = isset($_GET['notif']) ? $_GET['notif'] : false;
if ($notif == "buyNow") {
	$barang_id = $_GET['barang_id'];
$buyNow = isset($_SESSION['buyNow']) ? $_SESSION['buyNow'] : false;

$query = mysqli_query($koneksi, "SELECT nama_barang, gambar, harga, stok FROM barang WHERE barang_id='$barang_id'");
$row = mysqli_fetch_assoc($query);

$buyNow[$barang_id] = array(
	"nama_barang" => $row["nama_barang"],
	"gambar" => $row["gambar"],
	"harga" => $row["harga"],
	"stok" => $row["stok"],
	"quantity" => 1
);

$_SESSION["buyNow"] = $buyNow;

header("location:" . BASE_URL . "index.php?page=data_pemesan&notif=buyNow");

}else{
$barang_id = $_GET['barang_id'];
$keranjang = isset($_SESSION['keranjang']) ? $_SESSION['keranjang'] : false;

$query = mysqli_query($koneksi, "SELECT nama_barang, gambar, harga, stok FROM barang WHERE barang_id='$barang_id'");
$row = mysqli_fetch_assoc($query);

$keranjang[$barang_id] = array(
	"nama_barang" => $row["nama_barang"],
	"gambar" => $row["gambar"],
	"harga" => $row["harga"],
	"stok" => $row["stok"],
	"quantity" => 1
);

$_SESSION["keranjang"] = $keranjang;

header("location:" . BASE_URL . "index.php#shopping");
}
