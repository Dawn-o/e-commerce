<div class="flex-1 py-10 px-16 h-screen">
    <?php
    $barang_id = $_GET['barang_id'];

    $query = mysqli_query($koneksi, "SELECT * FROM barang WHERE barang_id='$barang_id' AND status='on'");
    $row = mysqli_fetch_assoc($query); ?>

    <div class="flex flex-wrap justify-center">
        <div class="rounded-lg bg-white shadow-lg dark:bg-neutral-700 w-[50rem]">
            <div class="cursor-pointer p-4" onclick="history.back()">
                <svg fill="none" class="w-8 h-8" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </div>
            <h5 class="mb-5 text-2xl text-center font-bold text-neutral-800 dark:text-neutral-50 uppercase">
                <?php echo $row['nama_barang'] ?>
            </h5>
            <div class="flex flex-wrap justify-center">
                <img class="h-auto max-w-full rounded-lg" src="image/barang/<?php echo $row['gambar'] ?>" alt="" />
            </div>
            <div class="flex flex-col justify-start p-6">

                <p class="text-base text-neutral-600 dark:text-neutral-200">
                <p class="font-bold leading-tight uppercase"> Price : </p>
                <?php echo rupiah($row['harga']) ?>

                </p>
                <p class="mt-4 text-base text-neutral-600 dark:text-neutral-200">
                <p class="font-bold leading-tight uppercase"> About Items : </p>
                <?php echo $row['spesifikasi'] ?>
                </p>
                <div class="flex justify-end mx-5">
                    <a <?php if ($user_id) { ?> href="index.php?page=tambah_keranjang&barang_id=<?php echo $row['barang_id'] ?>" <?php } else { ?> href="index.php?page=login&notif=false&Action" <?php } ?> class="inline-block p-4 mb-2 mr-4 bg-blue-500 text-white font-bold text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-600 hover:shadow-lg focus:bg-blue-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-700 active:shadow-lg transition duration-150 ease-in-out"> + Add To Cart </a>
                    <a <?php if ($user_id) { ?> href="index.php?page=tambah_keranjang&barang_id=<?php echo $row['barang_id'] ?>&notif=buyNow" <?php } else { ?> href="index.php?page=login&notif=false&Action" <?php } ?> class="inline-block p-4 mb-2 bg-green-500 text-white font-bold text-xs leading-tight uppercase rounded shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out"> Buy Now </a>
                </div>
            </div>
        </div>
    </div>
</div>