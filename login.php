<?php
if ($user_id) {
    header("location: index.php?page=main");
}
?>
<section class="py-10 pt-20 font-rubik">
    <div class="px-6 h-full text-gray-800">
        <div class="flex xl:justify-center lg:justify-between justify-center items-center flex-wrap h-full g-6">
            <div class="py-2 lg:px-24">
                <div class="-m-1 flex w-full flex-wrap md:-m-2">
                    <div class="flex w-[55%] flex-wrap border-r border-gray-400 pr-10">
                        <div class="w-1/2 p-1 md:p-2">
                            <img alt="gallery" class="block h-full w-full rounded-lg object-cover object-center" src="http://www.nermark.com/reports/NAMM_Winter_2012/NAMM_2012_bilder/Benavente-Guitars.jpg" />
                        </div>
                        <div class="w-1/2 p-1 md:p-2">
                            <img alt="gallery" class="block h-full w-full rounded-lg object-cover object-center" src="image/slide/banner-2.jpg" />
                        </div>
                        <div class="w-full">
                            <p class="text-xl mx-4 font-medium text-justify border-t border-gray-400 pt-2">Exceed is the ultimate online destination for guitar enthusiasts. With a wide selection of guitars and a commitment to excellence, it offers a seamless and secure shopping experience. Whether you're a seasoned musician or just starting out, Exceed is your go-to platform for buying and selling guitars online.</p>
                        </div>
                    </div>

                    <div class="flex flex-wrap justify-center items-center">
                        <div class="ml-40 w-full">
                            <h1 class="mt-10 text-center text-2xl font-bold">Login</h1>
                            <div class="text-center text-base font-medium text-gray-500">Don't have an account? <a class="underline text-blue-600" href="<?php echo BASE_URL . "index.php?page=register" ?>">Register</a></div>

                            <form action="<?php echo BASE_URL . "proses_login.php"; ?>" class="w-full max-w-lg" method="post" enctype="multipart/form-data">
                                <?php
                                $notif = isset($_GET['notif']) ? $_GET['notif'] : false;

                                if ($notif == "true") { ?>
                                    <div class="bg-red-100 rounded-lg py-5 px-6 mt-3 mb-3 text-base text-red-700 inline-flex items-center w-full" role="alert">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times-circle" class="w-4 h-4 mr-2 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z"></path>
                                        </svg>
                                        Email and Password you have entered do not match!
                                    </div>
                                <?php } else if ($notif == "success") { ?>
                                    <!-- Main modal -->
                                    <div id="default-modal" data-modal-show="true" aria-hidden="true" class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
                                        <div class="relative w-full max-w-2xl px-4 h-full md:h-auto">
                                            <!-- Modal content -->
                                            <div class="bg-gray-100 rounded-lg shadow relative dark:bg-gray-700">
                                                <!-- Modal header -->
                                                <div class="flex items-start justify-between p-5 dark:border-gray-600">
                                                    <h3 class="text-gray-900 text-xl lg:text-2xl font-semibold dark:text-white">

                                                    </h3>
                                                </div>
                                                <!-- Modal body -->
                                                <div class="p-6 space-y-6">
                                                    <div class="w-full h-full">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="text-[#059669] mx-auto h-16 rounded-full bg-[#D1FAE5] w-16" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M5 13l4 4L19 7" />
                                                        </svg>
                                                        <p class="text-center mt-3 text-2xl font-bold">Created Account Successful!</p>
                                                    </div>
                                                </div>
                                                <!-- Modal footer -->
                                                <div class="flex space-x-2 items-center justify-center pb-10 dark:border-gray-600">
                                                    <button data-modal-toggle="default-modal" type="button" class="inline-block px-8 py-3 bg-blue-600 text-white font-bold text-sm leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <?php } else if ($notif == "false") {
                                    $_SESSION["cart"] = true;
                                ?>
                                    <div class="bg-red-100 rounded-lg py-5 px-6 mt-3 mb-3 text-base text-red-700 inline-flex items-center w-full" role="alert">
                                        <span class="mr-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                                                <path fill-rule="evenodd" d="M9.401 3.003c1.155-2 4.043-2 5.197 0l7.355 12.748c1.154 2-.29 4.5-2.599 4.5H4.645c-2.309 0-3.752-2.5-2.598-4.5L9.4 3.003zM12 8.25a.75.75 0 01.75.75v3.75a.75.75 0 01-1.5 0V9a.75.75 0 01.75-.75zm0 8.25a.75.75 0 100-1.5.75.75 0 000 1.5z" clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                        Please Login First Before Shopping!
                                    </div>
                                <?php } ?>
                                <div class="flex flex-wrap -mx-3 mb-3">
                                    <div class="w-screen px-3">
                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-text">
                                            Email
                                        </label>
                                        <input name="email" pattern=".+@(gmail|yahoo).com" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3.5 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-text" type="email" placeholder="Email">
                                    </div>
                                </div>

                                <div class="flex flex-wrap -mx-3 mb-3">
                                    <div class="w-screen px-3">
                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-text">
                                            Password
                                        </label>
                                        <input name="password" minlength="8" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3.5 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-text" type="password" placeholder="Password">
                                    </div>
                                </div>


                                <div class="w-full px-3 mb-6 md:mb-0">
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full">
                                            <div class="mb-3">
                                                <label class="inline-flex items-center font-medium">
                                                    <input type="checkbox" class="h-5 w-5"><span class="ml-2 text-gray-500">Remember ME!</span>
                                                </label>
                                            </div>
                                            <button type="submit" name="submit" class="cursor-pointer inline-block px-8 py-3 bg-blue-600 text-white font-medium text-sm leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                                                Login
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<script src="https://unpkg.com/flowbite@1.4.4/dist/flowbite.js"></script>