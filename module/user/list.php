<?php
$queryUser = mysqli_query($koneksi, "SELECT * FROM user");

if (mysqli_num_rows($queryUser) == 0) {
    echo "<h3>Currently There Is No Data In The User Table</h3>";
} else {
?>
    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                <div class="overflow-hidden">

                    <?php
                    $notif = isset($_GET['notif']) ? $_GET['notif'] : false;

                    if ($notif == "true") { ?>
                        <div class="mb-3 inline-flex w-full items-center rounded-lg bg-success-100 py-5 px-6 mt-3 mb-3 text-base text-success-700" role="alert">
                            <span class="mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            Deleted Successfully!
                        <?php echo "<meta http-equiv='refresh', content='2; url=index.php?page=my_profile&module=user&action=list'>";
                    } ?>
                        </div>
                        <div class="flex justify-start">
                            <div class="mb-3">
                                <form action="" method="POST">
                                    <input type="text" name="search" id="search" class="relative m-0 block w-96 min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-gray-800" placeholder="Type query" autofocus autocomplete="off" />
                                </form>
                            </div>
                        </div>
                        <div id="container">
                            <table class="min-w-full text-left text-md font-medium">
                                <thead class="border-b font-medium border-neutral-800">
                                    <tr>
                                        <th scope="col" class="px-6 py-4">No</th>
                                        <th scope="col" class="px-6 py-4">Level</th>
                                        <th scope="col" class="px-6 py-4">Username</th>
                                        <th scope="col" class="px-6 py-4">Email</th>
                                        <th scope="col" class="px-6 py-4">Address</th>
                                        <th scope="col" class="px-6 py-4">Phone</th>
                                        <th scope="col" class="px-6 py-4">Status</th>
                                        <th scope="col" class="px-6 py-4">Action</th>
                                    </tr>
                                </thead>
                                <?php
                                $no = 1;
                                while ($row = mysqli_fetch_assoc($queryUser)) {
                                ?>
                                    <tbody>
                                        <tr class="border-b border-neutral-500">
                                            <td class="whitespace-nowrap px-6 py-4 font-bold"><?php echo $no ?></td>
                                            <td class="whitespace-nowrap capitalize px-6 py-4"><?php echo $row['level'] ?></td>
                                            <td class="whitespace-nowrap px-6 py-4"><?php echo $row['nama'] ?></td>
                                            <td class="whitespace-nowrap px-6 py-4"><?php echo $row['email'] ?></td>
                                            <td class="whitespace-nowrap px-6 py-4"><?php echo $row['alamat'] ?></td>
                                            <td class="whitespace-nowrap px-6 py-4"><?php echo $row['phone'] ?></td>
                                            <td class="whitespace-nowrap px-9 py-4"><?php echo $row['status'] ?></td>
                                            <td class="whitespace-nowrap py-4">
                                                <div class="flex space-x-2">
                                                    <a title="Edit" href="index.php?page=my_profile&module=user&action=form&user_id=<?php echo $row['user_id'] ?>" class="inline-block px-3 py-2.5 bg-blue-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-600 hover:shadow-lg focus:bg-blue-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-700 active:shadow-lg transition duration-150 ease-in-out">
                                                        <svg fill="none" stroke="currentColor" class="w-5 h-5" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10"></path>
                                                        </svg>
                                                    </a>
                                                    <a title="Delete" href="module/user/proses_hapus.php?user_id=<?php echo $row['user_id'] ?>" class="inline-block px-3 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out">
                                                        <svg fill="none" stroke="currentColor" class="w-5 h-5" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"></path>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                <?php $no++;
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
                $("#container").load("module/user/livedata/data.php?search=" + search);
            });
        });
    </script>