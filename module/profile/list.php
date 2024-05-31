<?php
$queryUser = mysqli_query($koneksi, "SELECT * FROM user WHERE user_id='$user_id'");
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
                        <table class="min-w-full text-left text-md font-medium">
                            <thead class="border-b font-medium border-neutral-800">
                                <tr>
                                    <th scope="col" class="px-6 py-4 text-center">Username</th>
                                    <th scope="col" class="px-6 py-4 text-center">Email</th>
                                    <th scope="col" class="px-6 py-4 text-center">Address</th>
                                    <th scope="col" class="px-6 py-4 text-center">Phone</th>
                                </tr>

                                <?php
                                while ($row = mysqli_fetch_assoc($queryUser)) {
                                ?>
                            <tbody>
                                <tr class="border-b border-neutral-500">
                                    <td class="whitespace-nowrap px-6 py-4 text-center"><?php echo $row['nama'] ?></td>
                                    <td class="whitespace-nowrap px-6 py-4 text-center"><?php echo $row['email'] ?></td>
                                    <td class="whitespace-nowrap px-6 py-4 text-center"><?php echo $row['alamat'] ?></td>
                                    <td class="whitespace-nowrap px-6 py-4 text-center"><?php echo $row['phone'] ?></td>
                                </tr>
                            </tbody>
                    <?php
                                }
                            }
                    ?>
                        </table>
                </div>
            </div>
        </div>