<?php
define("BASE_URL", "http://localhost/coding/xe/shop/");

$arrayStatusPesanan[0] = "Waiting For Payment";
$arrayStatusPesanan[1] = "Payment Is Being Validated";
$arrayStatusPesanan[2] = "Paid";
$arrayStatusPesanan[3] = "Payment Rejected";

function rupiah($nilai = 0)
{
    $string = "Rp," . number_format($nilai);
    return $string;
}

function kategori($kategori_id = false)
{
    global $koneksi;

    $string = "<div class='text-center mt-2 text-lg'>";

    $string .= "<nav><span class='font-bold'>-</span>";

    $query = mysqli_query($koneksi, "SELECT * FROM kategori WHERE status='on'");

    while ($row = mysqli_fetch_assoc($query)) {
        if ($kategori_id == $row['kategori_id']) {
            $string .= "<a href='" . BASE_URL . "index.php?kategori_id=$row[kategori_id]#shopping' data-te-ripple-init data-te-ripple-color='light' class='rounded mx-6 text-md font-semibold uppercase leading-normal text-gray-800 transition duration-150 ease-in-out hover:text-gray-600 focus:text-gray-600 focus:outline-none focus:ring-0 active:text-gray-700'>$row[kategori]</a>
            <span class='font-bold'> - </span>
            ";
        } else {
            $string .= "<a href='" . BASE_URL . "index.php?kategori_id=$row[kategori_id]#shopping' data-te-ripple-init data-te-ripple-color='light' class='rounded mx-6 text-md font-semibold uppercase leading-normal text-gray-800 transition duration-150 ease-in-out hover:text-gray-600 focus:text-gray-600 focus:outline-none focus:ring-0 active:text-gray-700'>$row[kategori]</a><span class='font-bold'>-</span>";
        }
    }
    $string .= "</nav>";

    $string .= "</div>";

    return $string;
}
