<?php
if ($user_id == false) {
    $_SESSION["proses_pesanan"] = true;

    header("location: " . BASE_URL . "index.php?page=login");
    exit();
}
?>
<h1 class="mb-6 mt-10 text-center text-2xl font-bold">Address For Delivery Of Items</h1>

<form action="<?php echo BASE_URL . "proses_pemesanan.php"; ?>" class="w-full max-w-lg" method="post" enctype="multipart/form-data">
    <?php
    $notif2 = isset($_GET['notif2']) ? $_GET['notif2'] : false;
    $nama_penerima = isset($_GET['nama_penerima']) ? $_GET['nama_penerima'] : false;
    $nomor_telepon = isset($_GET['nomor_telepon']) ? $_GET['nomor_telepon'] : false;
    $alamat = isset($_GET['alamat']) ? $_GET['alamat'] : false;
    $kota = isset($_GET['kota']) ? $_GET['kota'] : false;

    if ($notif2 == "require") { 
        ?>
        <div class="bg-red-100 rounded-lg py-5 px-6 mb-6 text-base text-red-700 inline-flex items-center w-full" role="alert">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times-circle" class="w-4 h-4 mr-2 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z"></path>
            </svg>
            Sorry, You Must Complete The Form Below!
        </div>
    <?php } ?>
    <div class="flex flex-wrap -mx-3 mb-3">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-text">
                Recipient's Name
            </label>
            <input name="nama_penerima" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-text" type="text" value="<?php echo $nama_penerima; ?>" placeholder="Recipient's Name">
        </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-3">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-text">
                Phone Number
            </label>
            <input name="nomor_telepon" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-text" type="number" value="<?php echo $nomor_telepon; ?>" placeholder="Phone Number">
        </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-3">
        <div class="w-full px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-text">
                Shipping Address
            </label>
            <textarea name="alamat" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-text" type="text" placeholder="Shipping Address"><?php echo $alamat; ?></textarea>
        </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-3">
        <div class="w-full px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-select">
                City
            </label>
            <div class="mb-3 appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-1.5 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                <select name="kota" value="<?php echo $kota; ?>" data-te-select-init>
                    <?php
                    $query = mysqli_query($koneksi, "SELECT * FROM kota");

                    while ($row = mysqli_fetch_assoc($query)) {
                        echo "<option value='$row[kota_id]'>$row[kota] (" . rupiah($row["tarif"]) . ")</option>";
                    }
                    ?>
                </select>
            </div>
        </div>
    </div>

    <div class="w-full px-3 mb-6 md:mb-0">
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full">
                <button type="submit" name="submit" data-mdb-ripple="true" class="inline-block px-8 py-3 bg-blue-600 text-white font-medium text-sm leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                    Submit
                </button>
            </div>
        </div>
    </div>
</form>


<div class="flex flex-col">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
            <table class="min-w-full text-left text-sm font-medium">
                <thead class="border-b font-medium border-neutral-800">
                    <tr>
                        <th scope="col" class="px-6 py-4">No</th>
                        <th scope="col" class="px-6 py-4">Items Name</th>
                        <th scope="col" class="px-6 py-4">Quantity</th>
                        <th scope="col" class="px-6 py-4">Total</th>
                    </tr>

                    <!-- BUY NOW -->
                    <?php
                    $notif = isset($_GET['notif']) ? $_GET['notif'] : false;
                    if ($notif == "buyNow") {

                        $no = 0;
                        $subtotal = 0;
                        foreach ($buyNow as $key => $value) {

                            $barang_id = $key;

                            $nama_barang = $value['nama_barang'];
                            $harga = $value['harga'];
                            $quantity = $value['quantity'];

                            $total = $quantity * $harga;
                            $subtotal = $subtotal + $total;
                            $no++;
                    ?>
                <tbody>
                    <tr class="border-b border-neutral-500">
                        <td class="whitespace-nowrap px-6 py-4"><?php echo $no ?></td>
                        <td class="whitespace-nowrap px-6 py-4"><?php echo $nama_barang ?></td>
                        <td class="whitespace-nowrap px-6 py-4"><?php echo $quantity ?></td>
                        <td class="whitespace-nowrap px-6 py-4"><?php echo rupiah($total) ?></td>
                    </tr>

                    <!-- FROM SHOPPING CART -->
                <?php }
                    } else {
                        $no = 0;
                        $subtotal = 0;
                        foreach ($keranjang as $key => $value) {

                            $barang_id = $key;

                            $nama_barang = $value['nama_barang'];
                            $harga = $value['harga'];
                            $quantity = $value['quantity'];

                            $total = $quantity * $harga;
                            $subtotal = $subtotal + $total;

                            $no++;
                ?>

                <tbody>
                    <tr class="border-b border-neutral-500">
                        <td class="whitespace-nowrap px-6 py-4"><?php echo $no ?></td>
                        <td class="whitespace-nowrap px-6 py-4"><?php echo $nama_barang ?></td>
                        <td class="whitespace-nowrap px-6 py-4"><?php echo $quantity ?></td>
                        <td class="whitespace-nowrap px-6 py-4"><?php echo rupiah($total) ?></td>
                    </tr>

            <?php
                        }
                    }
            ?>

            <tr class="border-b border-neutral-500">
                <td colspan="2"></td>
                <td class="whitespace-nowrap px-6 py-4 font-bold">Sub Total</td>
                <td class="whitespace-nowrap px-6 py-4"><?php echo rupiah($subtotal) ?></td>
            </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>