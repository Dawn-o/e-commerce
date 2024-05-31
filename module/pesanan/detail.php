<?php
$pesanan_id = $_GET["pesanan_id"];

$query = mysqli_query($koneksi, "SELECT pesanan.nama_penerima, pesanan.nomor_telepon, pesanan.alamat, pesanan.tanggal_pemesanan, user.nama,kota.kota, kota.tarif FROM pesanan JOIN user ON pesanan.user_id=user.user_id JOIN kota ON kota.kota_id=pesanan.kota_id WHERE pesanan.pesanan_id='$pesanan_id'");

$row = mysqli_fetch_assoc($query);

$tanggal_pemesanan = $row['tanggal_pemesanan'];
$nama_penerima = $row['nama_penerima'];
$nomor_telepon = $row['nomor_telepon'];
$alamat = $row['alamat'];
$tarif = $row['tarif'];
$nama = $row['nama'];
$kota = $row['kota'];
?>

<div class="">
    <h3 class="text-center text-2xl pb-3 mb-3 font-bold border-b border-gray-800">
        Order Detail
    </h3>
    <table class="text-1xl font-medium">
        <tr>
            <td>Invoice Number</td>
            <td> &nbsp; : </td>
            <td> &nbsp; <?php echo $pesanan_id; ?></td>
        </tr>

        <tr>
            <td>Customer Name</td>
            <td> &nbsp; : </td>
            <td> &nbsp; <?php echo $nama; ?></td>
        </tr>

        <tr>
            <td>Recipient's Name</td>
            <td> &nbsp; : </td>
            <td> &nbsp; <?php echo $nama_penerima; ?><td>
        </tr>

        <tr>
            <td>Address</td>
            <td> &nbsp; : </td>
            <td> &nbsp; <?php echo $alamat; ?></td>
        </tr>

        <tr>
            <td>Phone Number</td>
            <td> &nbsp; : </td>
            <td> &nbsp; <?php echo $nomor_telepon; ?></td>
        </tr>

        <tr>
            <td>Order Date</td>
            <td> &nbsp; : </td>
            <td> &nbsp; <?php echo $tanggal_pemesanan; ?></td>
        </tr>
    </table>
</div>

<div class="flex flex-col">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
            <table class="min-w-full text-left text-sm font-medium">
                <thead class="border-b font-medium border-neutral-800">
                    <tr>
                        <th scope="col" class="px-6 py-4">No</th>
                        <th scope="col" class="px-6 py-4">Items Name</th>
                        <th scope="col" class="px-6 py-4">Quantity</th>
                        <th scope="col" class="px-6 py-4">Unit Price</th>
                        <th scope="col" class="px-6 py-4">Total</th>
                    </tr>
                <tbody>
                    <?php

                    $queryDetail = mysqli_query($koneksi, "SELECT pesanan_detail.*, barang.nama_barang FROM pesanan_detail JOIN barang ON pesanan_detail.barang_id=barang.barang_id WHERE pesanan_detail.pesanan_id='$pesanan_id'");

                    $no = 1;
                    $subtotal = 0;
                    while ($rowDetail = mysqli_fetch_assoc($queryDetail)) {
                        $total = $rowDetail["harga"] * $rowDetail["quantity"];
                        $subtotal = $subtotal + $total;


                        echo "<tr class='border-b border-neutral-500'>
                <td class='whitespace-nowrap px-6 py-4'>$no</td>
                <td class='whitespace-nowrap px-6 py-4'>$rowDetail[nama_barang]</td>
                <td class='whitespace-nowrap px-6 py-4'>$rowDetail[quantity]</td>
                <td class='whitespace-nowrap px-6 py-4'>" . rupiah($rowDetail["harga"]) . "</td>
                <td class='whitespace-nowrap px-6 py-4'>" . rupiah($total) . "</td>
            </tr>";
                        $no++;
                    }
                    $subtotal = $subtotal + $tarif;
                    ?>
                    <tr class="border-b border-neutral-500">
                        <td colspan="3"></td>
                        <td class="whitespace-nowrap px-6 py-4 font-bold" colspan="">Shipping Costs</td>
                        <td class="whitespace-nowrap px-6 py-4"><?php echo rupiah($tarif) ?></td>
                    </tr>
                    <tr class="border-b border-neutral-500">
                        <td colspan="3"></td>
                        <td class="whitespace-nowrap px-6 py-4 font-bold" colspan="">Sub Total</td>
                        <td class="whitespace-nowrap px-6 py-4"><?php echo rupiah($subtotal) ?></td>
                    </tr>

            </table>

            <div class="mt-5">
                <p>Please Make A Payment To Bank YPT<br />
                    Account Number: 0001-9991-8881-0-1 (A/N Telkom School Banjarbaru).<br /> After Making The Payment, Please Confirm The Payment
                    <a class="text-blue-600 font-bold uppercase" href="<?php echo BASE_URL . "index.php?page=my_profile&module=pesanan&action=konfirmasi_pembayaran&pesanan_id=$pesanan_id" ?>">Here</a>
                </p>

            </div>