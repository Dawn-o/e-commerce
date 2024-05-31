<?php
if ($level == "superadmin") {
    $queryPesanan = mysqli_query($koneksi, "SELECT pesanan.*, user.nama FROM pesanan JOIN user ON pesanan.user_id=user.user_id ORDER BY pesanan.tanggal_pemesanan DESC");
} else {
    $queryPesanan = mysqli_query($koneksi, "SELECT pesanan.*, user.nama FROM pesanan JOIN user ON pesanan.user_id=user.user_id WHERE pesanan.user_id='$user_id' ORDER BY pesanan.tanggal_pemesanan DESC");
}


if (mysqli_num_rows($queryPesanan) == 0) {
    echo "<h3 class='text-red-600 font-semibold uppercase text-center text-2xl'>Currently There Is No Data In The Order</h3>";
} else { ?>
    <div class="h-screen flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <div class="flex justify-between">
                        <div class="mb-3">
                            <form action="" method="POST">
                                <input type="text" name="search" id="searchno" class="relative m-0 block w-96 min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-gray-800" placeholder="Type query" autofocus autocomplete="off" />
                            </form>
                        </div>
                    </div>
                    <div id="container">
                        <table class="min-w-full text-left text-md font-medium">
                            <?php
                            $notif = isset($_GET['notif']) ? $_GET['notif'] : false;

                            if ($notif == "true") { ?>
                                <div class="bg-red-100 rounded-lg py-5 px-6 mt-3 mb-3 text-base text-red-700 inline-flex items-center w-full" role="alert">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times-circle" class="w-4 h-4 mr-2 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z"></path>
                                    </svg>
                                    The status is already paid!
                                <?php echo "<meta http-equiv='refresh', content='2; url=index.php?page=my_profile&module=pesanan&action=list'>";
                            } ?>
                                <thead class="border-b font-medium border-neutral-800">
                                    <tr>
                                        <th scope="col" class="px-6 py-4">Order Number</th>
                                        <th scope="col" class="px-6 py-4">Status</th>
                                        <th scope="col" class="px-6 py-4">Name</th>
                                        <th scope="col" class="px-6 py-4">Action</th>
                                    </tr>
                                </thead>
                                <?php
                                $adminButton = "";
                                while ($row = mysqli_fetch_assoc($queryPesanan)) {
                                    if ($level == "superadmin") {
                                        $adminButton = "<a title='Update' href='" . BASE_URL . "index.php?page=my_profile&module=pesanan&action=status&pesanan_id=$row[pesanan_id]' class='inline-block px-3 py-2.5 bg-green-500 text-green-50 font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out'>Update Status</a>";
                                    }
                                    $status = $row['status'];
                                ?>
                                    <tbody>
                                        <tr class="border-b border-neutral-500">
                                            <td class="whitespace-nowrap px-6 py-4 font-bold"><?php echo $row['pesanan_id'] ?></td>
                                            <td class="whitespace-nowrap px-6 py-4"><?php echo $arrayStatusPesanan[$status] ?></td>
                                            <td class="whitespace-nowrap px-6 py-4"><?php echo $row['nama'] ?></td>
                                            <td class="whitespace-nowrap py-4">
                                                <div class="flex space-x-2">
                                                    <a title="Detail" href="index.php?page=my_profile&module=pesanan&action=detail&pesanan_id=<?php echo $row['pesanan_id'] ?>" class="inline-block px-3 py-2.5 bg-blue-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-600 hover:shadow-lg focus:bg-blue-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-700 active:shadow-lg transition duration-150 ease-in-out">
                                                        Order Detail
                                                    </a>
                                                    <?php echo $adminButton ?>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                <?php
                                }

                                ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    <script>
        $(document).ready(function() {
            $("#search").on("keyup", function() {
                var search = encodeURIComponent($("#search").val());
                $("#container").load("module/pesanan/livedata/data.php?search=" + search);
            });
        });
    </script>