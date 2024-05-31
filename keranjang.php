<div class="pt-5">
    <?php if ($totalBarang == 0) {
        echo "<h3 class='text-center text-red-600 font-bold text-xl uppercase mt-10'>There is currently no items in your shopping cart</h3>
        <a href='index.php#shopping' class='inline-block flex justify-center mt-5 mx-20 px-4 py-3 bg-green-500 text-white font-bold leading-tight uppercase rounded shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out' data-mdb-ripple='true' data-mdb-ripple-color='light'>Go Shopping</a>
        " ?>
    <?php } else { ?>
        <h1 class="mb-10 text-center text-2xl font-bold">Cart Items</h1>
    <?php } ?>
    <div class="mx-auto justify-center px-6 md:flex md:space-x-6 xl:px-0">
        <div class="rounded-lg md:w-2/3">
            <div class="grid xl:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-2 w-5xl">

                <?php
                if ($totalBarang == 0) {
                    echo "";
                } else {

                    $no = 1;

                    $subtotal = 0;
                    foreach ($keranjang as $key => $value) {
                        $barang_id = $key;

                        $nama_barang = $value["nama_barang"];
                        $quantity = $value["quantity"];
                        $gambar = $value["gambar"];
                        $harga = $value["harga"];
                        $stok = (int)$value["stok"] - 1;
                        $min = 1;
                        $max = $stok;

                        $total = (int)$quantity * (int)$harga;
                        $subtotal = $subtotal + $total;
                ?>
                        <div class="justify-between mb-6 rounded-lg bg-white p-6 shadow-md sm:flex sm:justify-start">
                            <img src="<?php echo BASE_URL . "image/barang/$gambar"  ?>" alt="product-image" class="w-full rounded-lg sm:w-40" />
                            <div class="sm:ml-4 sm:flex sm:w-full sm:justify-between">
                                <div class="mt-5 sm:mt-0">
                                    <h2 class="text-xl font-bold text-gray-900"><?php echo $nama_barang ?></h2>
                                    <p class="mt-1 text-md text-gray-700"><?php echo rupiah($harga) ?></p>
                                </div>
                                <div class="mt-4 flex justify-between sm:space-y-6 sm:mt-0 sm:block sm:space-x-6">
                                    <div class="items-center border-gray-100">
                                    <label class="block uppercase tracking-wide text-xs font-bold mb-2" for="grid-text">Quantity :</label>
                                        <input class="h-8 w-full rounded border bg-white text-center text-xs outline-none update-quantity" type="number" name="<?php echo $barang_id ?>" value="<?php echo $quantity ?>" min="<?php echo $min ?>" max="<?php echo $max ?>" />
                                    </div>
                                    <div class="flex items-center space-x-4">
                                        <p class="text-sm"><?php echo rupiah($total) ?></p>
                                        <a href="<?php echo BASE_URL . "hapus_item.php?barang_id=$barang_id" ?>">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 cursor-pointer duration-150 hover:text-red-500">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div> <!-- Sub total -->

<?php if ($totalBarang == 0) {
    echo "" ?>
<?php } else { ?>
    <div class="sticky bottom-0">
        <div class="mt-6 w-[1500px] rounded-lg border bg-white p-6 shadow-md mt-0">
            <div class="mb-2 flex justify-between">
                <p class="text-gray-700">Subtotal</p>
                <p class="text-gray-700"><?php echo rupiah($subtotal) ?></p>
            </div>
            <div class="flex justify-between">
                <p class="text-gray-700"></p>
                <p class="text-gray-700"></p>
            </div>
            <hr class="my-4" />
            <div class="flex justify-between">
                <p class="text-lg font-bold">Total</p>
                <div class="">
                    <p class="mb-1 text-lg font-bold"><?php echo rupiah($subtotal) ?></p>
                    <p class="text-sm text-gray-700"></p>
                </div>
            </div>
            <div class="flex justify-center gap-5">
                <a href="index.php#shopping" class="mt-6 w-1/2 text-center rounded-md bg-blue-500 py-1.5 font-medium text-white hover:bg-blue-600">Continue Shopping</a>
                <a href="index.php?page=data_pemesan" class="mt-6 w-1/2 text-center rounded-md bg-green-500 py-1.5 font-medium text-green-50 hover:bg-green-600">Check out</a>
            </div>
        </div>
    </div>
<?php } ?>
<script>
    $(".update-quantity").on("input", function(e) {
        var barang_id = $(this).attr("name");
        var value = $(this).val();

        $.ajax({
                method: "POST",
                url: "update_keranjang.php",
                data: "barang_id=" + barang_id + "&value=" + value
            })
            .done(function(data) {
                location.reload();
            });
    });
</script>