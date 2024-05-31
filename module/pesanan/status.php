<?php

$pesanan_id = $_GET["pesanan_id"];

$query = mysqli_query($koneksi, "SELECT status FROM pesanan WHERE pesanan_id='$pesanan_id'");
$row = mysqli_fetch_assoc($query);
$status = $row['status'];

?>

<form action="<?php echo BASE_URL . "module/pesanan/action.php?pesanan_id=$pesanan_id"; ?>" class="w-full max-w-lg" method="post">
    <div class="-mx-3 mb-6">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-text">
                Order ID (ID Invoice)
            </label>
            <input name="pesanan_id" value="<?php echo $pesanan_id; ?>" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-text" type="text" disabled>
        </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-status">
                Status
            </label>
            <div class="mb-3 appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-1.5 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                <select name="status" data-te-select-init> <?php
                                                                foreach ($arrayStatusPesanan as $key => $value) {
                                                                    if ($status == $key) {
                                                                        echo "<option value='$key' selected='true'>$value</option>";
                                                                    } else {
                                                                        echo "<option value='$key'>$value</option>";
                                                                    }
                                                                }
                                                                ?>
                </select>
            </div>
        </div>
    </div>

    <div class="w-full px-3 mb-6 md:mb-0">
        <div class="flex flex-wrap -mx-3 mb-6">

            <div class="w-full">
                <input value="Edit Status" type="submit" name="button" data-mdb-ripple="true" class="inline-block cursor-pointer px-8 py-3 bg-blue-600 text-white font-medium text-sm leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
            </div>
        </div>
    </div>
</form>