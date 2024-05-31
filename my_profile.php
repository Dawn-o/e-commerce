<?php
if ($user_id) {
    $module = isset($_GET['module']) ? $_GET['module'] : false;
    $action = isset($_GET['action']) ? $_GET['action'] : false;
    $mode = isset($_GET['mode']) ? $_GET['mode'] : false;
} else {
    header("location:" . BASE_URL . "index.php?page=login");
}
?>
<div class="w-screen font-base">
    <div>

        <div class="flex flex-col md:flex-row">

            <aside id="sidebar" class="fixed w-full md:w-60 bg-gray-800 md:min-h-screen border-r border-gray-100 transform transition-transform ease-in-out duration-300">
                <div class="flex items-center justify-between bg-gray-900 p-4 h-24 text-white">
                    <!-- logo -->
                    <a <?php if ($module == "profile") {
                        } ?> href="<?php echo BASE_URL . "index.php?page=my_profile&module=profile&action=list" ?>" class="block flex items-center mx-8 transition duration-200">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span class="text-2xl font-bold px-2 uppercase">Profile</span>
                    </a>
                </div>
                <!-- nav -->
                <nav class="ml-8 text-center">
                    <?php if ($level == "superadmin") { ?>
                        <a <?php if ($module == "kategori") {
                            } ?> href="<?php echo BASE_URL . "index.php?page=my_profile&module=kategori&action=list" ?>" class="block flex items-center px-2 m-2 text-white text-lg py-3 mt-7 transition duration-200 <?php if ($module == "kategori") {
                                                                                                                                                                                                                            echo "rounded bg-gray-600";
                                                                                                                                                                                                                        } else { ?> hover:rounded hover:bg-gray-600 focus:rounded focus:bg-gray-700<?php } ?>">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z"></path>
                            </svg>
                            <span class="px-2">Category</span>
                        </a>

                        <a <?php if ($module == "barang") {
                            } ?> href="<?php echo BASE_URL . "index.php?page=my_profile&module=barang&action=list" ?>" class="block flex items-center px-2 m-2 text-white text-lg py-3 transition duration-200 <?php if ($module == "barang") {
                                                                                                                                                                                                                    echo "rounded bg-gray-600";
                                                                                                                                                                                                                } else { ?> hover:rounded hover:bg-gray-600 focus:rounded focus:bg-gray-700<?php } ?>">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"></path>
                            </svg>
                            <span class="px-2">Items</span>
                        </a>

                        <a <?php if ($module == "kota") {
                            } ?> href="<?php echo BASE_URL . "index.php?page=my_profile&module=kota&action=list" ?>" class="block flex items-center px-2 m-2 text-white text-lg py-3 transition duration-200 <?php if ($module == "kota") {
                                                                                                                                                                                                                    echo "rounded bg-gray-600";
                                                                                                                                                                                                                } else { ?> hover:rounded hover:bg-gray-600 focus:rounded focus:bg-gray-700<?php } ?>">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z"></path>
                            </svg>
                            <span class="px-2">City</span>
                        </a>

                        <a <?php if ($module == "user") {
                            } ?> href="<?php echo BASE_URL . "index.php?page=my_profile&module=user&action=list" ?>" class="block flex items-center px-2 m-2 text-white text-lg py-3 transition duration-200 <?php if ($module == "user") {
                                                                                                                                                                                                                    echo "rounded bg-gray-600";
                                                                                                                                                                                                                } else { ?> hover:rounded hover:bg-gray-600 focus:rounded focus:bg-gray-700<?php } ?>">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z"></path>
                            </svg>
                            <span class="px-2">User</span>
                        </a>

                        <a <?php if ($module == "banner") {
                            } ?> href="<?php echo BASE_URL . "index.php?page=my_profile&module=banner&action=list" ?>" class="block flex items-center px-2 m-2 text-white text-lg py-3 transition duration-200 <?php if ($module == "banner") {
                                                                                                                                                                                                                    echo "rounded bg-gray-600";
                                                                                                                                                                                                                } else { ?> hover:rounded hover:bg-gray-600 focus:rounded focus:bg-gray-700<?php } ?>">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z"></path>
                            </svg>
                            <span class="px-2">Banner</span>
                        </a>
                    <?php  } ?>
                    <a <?php if ($module == "pesanan") {
                        } ?> href="<?php echo BASE_URL . "index.php?page=my_profile&module=pesanan&action=list" ?>" class="block flex items-center px-2 m-2 text-white text-lg py-3 transition duration-200 <?php if ($module == "pesanan") {
                                                                                                                                                                                                                echo "rounded bg-gray-600";
                                                                                                                                                                                                            } else { ?> hover:rounded hover:bg-gray-600 focus:rounded focus:bg-gray-700<?php } ?>">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"></path>
                        </svg>
                        <span class="px-2">Order</span>
                    </a>

                </nav>


            </aside>

            <div id="mainContent" class="w-full md:flex-1 ml-60 transition-all duration-300">
                <nav class="flex justify-between bg-white text-white shadow-md">
                    <div class="px-8 py-6 flex w-full items-center">
                        <button id="toggleSidebar" class="text-gray-800 mr-3 w-12 h-12">☰</button>
                        <a rel="noopener noreferrer" href="<?php echo BASE_URL; ?>" class="flex justify-start">
                            <div class="flex items-center justify-center">
                                <img class="h-12" src="<?php echo BASE_URL . "image/logo3.png"; ?>" alt="logo">
                            </div>
                            <span class="self-center text-2xl font-semibold"> <img class="h-9" src="<?php echo BASE_URL . "image/logo22.png"; ?>" alt="logo">
                            </span>
                        </a>
                        <!-- <a href="<?php echo BASE_URL . "index.php?page=product" ?>" class="inline-block px-3 py-3 ml-7 bg-transparent text-xl  text-gray-200 font-bold leading-tight uppercase rounded hover:text-gray-800 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:ring-0 active:bg-gray-300 transition duration-150 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="light">Products</a> -->




                        <?php
                        if ($user_id) {
                        ?>
                            <!-- Header Icons -->

                            <!-- <div class="hidden xl:flex space-x-5 items-center">
                                <a class="flex items-center hover:text-gray-200" href="<?php echo BASE_URL . "index.php?page=keranjang"; ?>" title="Cart">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg><?php
                                            if ($totalBarang == 1) {
                                                echo  "<div class='bg-red-600 rounded-full p-2 mb-6'>
                                                            <span class='flex absolute right-[212px] -mt-[9px] text-center text-[13px] font-bold uppercase'>$totalBarang</span></div>";
                                            } else if ($totalBarang == 10) {
                                                echo  "<div class='bg-red-600 rounded-full p-2 mb-6'>
                                                            <span class='flex absolute right-[209px] -mt-[9px] text-center text-[12px] font-bold uppercase'>$totalBarang</span></div>";
                                            } else if ($totalBarang == 12) {
                                                echo  "<div class='bg-red-600 rounded-full p-2 mb-6'>
                                                            <span class='flex absolute right-[209px] -mt-[9px] text-center text-[12px] font-bold uppercase'>$totalBarang</span></div>";
                                            } else if ($totalBarang != 0) {
                                                echo  "<div class='bg-red-600 rounded-full p-2 mb-6'>
                          <span class='flex absolute right-[211px] -mt-[9px] text-center text-[13px] font-bold uppercase'>$totalBarang</span></div>";
                                            }
                                            ?>
                                </a> -->


                            <!-- PROFILE -->
                            <!-- <div class="flex justify-center">
                                    <a href="<?php echo BASE_URL . "index.php?page=my_profile&module=kategori&action=list" ?>" title="Profile">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </a>
                                </div>
                                <a href="logout.php" class="inline-block px-4 py-3 bg-red-600 font-bold leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="light">Logout</a> -->

                        <?php } else { ?>
                            <!-- <ul class="flex items-center font-semibold uppercase space-x-5">
                                    <li>
                                        <div class="flex items-center lg:ml-auto">
                                            <a href="<?php echo BASE_URL . "index.php?page=login" ?>" class="inline-block px-6 py-3 mr-2 bg-transparent text-gray-200 font-bold leading-tight uppercase rounded hover:text-gray-800 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:ring-0 active:bg-gray-300 transition duration-150 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="light">Login</a>
                                            <a href="<?php echo BASE_URL . "index.php?page=register" ?>" class="inline-block px-6 py-3 bg-gray-100 text-gray-800 font-bold leading-tight uppercase rounded shadow-md hover:bg-gray-200 hover:shadow-lg focus:bg-gray-200 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-300 active:shadow-lg transition duration-150 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="light">Sign up for free</a>
                                        </div>
                                    </li>
                                </ul> -->

                        <?php } ?>
                    </div>
                </nav>
                <main>


                    <div class="font-rubik">

                        <!-- content -->
                        <div class="py-10 px-16">

                            <?php
                            $file = "module/$module/$action.php";
                            if (file_exists($file)) {
                                include_once($file);
                            } else { ?>
                                <h3>
                                    <div class="text-center text-2xl text-red-500 uppercase font-bold">File doesn't exists</div>
                                </h3>
                            <?php }
                            if ($_SESSION['level'] == "customer") {
                                $a = "pesanan";
                                $b = "profile";
                                if ($module !== ($a) && $module !== ($b)) {
                                    header("location: index.php?page=my_profile&module=pesanan&action=list");
                                }
                            }
                            ?>

                        </div>

                    </div>
                </main>
            </div>
        </div>
    </div>
</div>
<script>
        const toggleSidebarButton = document.getElementById('toggleSidebar');
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.getElementById('mainContent');

        function toggleSidebar() {
            sidebar.classList.toggle("-translate-x-64");
            mainContent.classList.toggle('ml-0');
            if (sidebar.classList.contains('-translate-x-64')) {
                localStorage.setItem('sidebarStatus', 'open');
            } else {
                localStorage.setItem('sidebarStatus', 'closed');
            }
        }

        toggleSidebarButton.addEventListener('click', toggleSidebar);

        const storedSidebarStatus = localStorage.getItem('sidebarStatus');
        if (storedSidebarStatus === 'open') {
            toggleSidebar();
        }
    </script>