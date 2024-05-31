<?php

if ($user_id) {
    header("location: index.php?page=main");
}
?>

<h1 class="mt-10 text-center text-2xl font-bold">Create Account</h1>
<div class="mb-6 text-center text-base font-medium text-gray-500">Already have account? <a class="underline text-blue-600" href="<?php echo BASE_URL . "index.php?page=login" ?>">Sign in</a></div>

<form action="<?php echo BASE_URL . "proses_register.php"; ?>" class="w-full max-w-lg" method="post" enctype="multipart/form-data">
    <?php
    $notif = isset($_GET['notif']) ? $_GET['notif'] : false;
    $nama = isset($_GET['nama']) ? $_GET['nama'] : false;
    $email = isset($_GET['email']) ? $_GET['email'] : false;
    $phone = isset($_GET['phone']) ? $_GET['phone'] : false;
    $alamat = isset($_GET['alamat']) ? $_GET['alamat'] : false;

    if ($notif == "require") { ?>
        <div class="bg-red-100 rounded-lg py-5 px-6 mt-3 text-base text-red-700 inline-flex items-center w-full" role="alert">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times-circle" class="w-4 h-4 mr-2 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z"></path>
            </svg>
            Sorry, You Must Complete The Form Below!
        </div>
    <?php } else if ($notif == "password") { ?>
        <div class="bg-red-100 rounded-lg py-5 px-6 mt-3 text-base text-red-700 inline-flex items-center w-full" role="alert">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times-circle" class="w-4 h-4 mr-2 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z"></path>
            </svg>
            Sorry, The Password You Entered Is Not The Same!
        </div>
    <?php } else if ($notif == "email") { ?>
        <div class="bg-red-100 rounded-lg py-5 px-6 mt-3 text-base text-red-700 inline-flex items-center w-full" role="alert">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times-circle" class="w-4 h-4 mr-2 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z"></path>
            </svg>
            Sorry, The Email You Entered Is Already Registered!
        </div>
    <?php } ?>
    <div class="flex flex-wrap -mx-3 mb-3 mt-3">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-text">
                Full Name
            </label>
            <input name="nama" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-text" type="text" value="<?php echo $nama; ?>" placeholder="Full Name">
        </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-3">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-text">
                Email
            </label>
            <input name="email" pattern=".+@(gmail|yahoo).com" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-text" type="email" value="<?php echo $email; ?>" placeholder="Email">
        </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-3">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-text">
                Phone
            </label>
            <input name="phone" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-text" type="number" value="<?php echo $phone; ?>" placeholder="phone">
        </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-3">
        <div class="w-full px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-text">
                Address
            </label>
            <textarea name="alamat" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-text" type="text" placeholder="Address"><?php echo $alamat; ?></textarea>
        </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-3">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-text">
                Password
            </label>
            <input name="password" minlength="8" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-text" type="password" placeholder="Password">
        </div>
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-text">
                Re - Password
            </label>
            <input name="re_password" minlength="8" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-text" type="password" placeholder="Re - Password">
        </div>
    </div>


    <div class="w-full px-3 mb-6 md:mb-0">
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full">
                <div class="mb-3">
                    <label class="inline-flex items-center font-medium">
                        <input type="checkbox" class="h-5 w-5" required><span class="ml-2 text-gray-500">I have read and agree to the</span><span class="text-indigo-500">&nbsp;Term of Service</span>
                    </label>
                </div>
                <a data-modal-toggle="default-modal" class="cursor-pointer inline-block px-8 py-3 bg-blue-600 text-white font-medium text-sm leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                    Sign Up
                </a>

                <div id="default-modal" data-modal-show="false" aria-hidden="true" class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
                    <div class="relative w-full max-w-2xl px-4 h-full md:h-auto">
                        <!-- Modal content -->
                        <div class="bg-white rounded-lg shadow relative dark:bg-gray-700">
                            <!-- Modal header -->
                            <div class="flex items-start justify-between p-5 border-b rounded-t dark:border-gray-600">
                                <h3 class="text-gray-900 text-xl lg:text-2xl font-semibold dark:text-white">
                                    Terms of Service
                                </h3>
                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="default-modal">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <div class="p-6 space-y-6">
                                <p class="text-gray-500 text-base leading-relaxed dark:text-gray-400">
                                    "Welcome! Before you can create an account, please take the time to read and understand our terms and conditions."

                                    "Thank you for your interest in joining us! Before proceeding, please review and accept our terms and conditions."

                                    "We are delighted that you have chosen to create an account with us. Before moving forward, please read and agree to our terms and conditions."

                                    "We value your trust in providing our services. Before you create an account, please check and accept the applicable terms and conditions."

                                    "We want to ensure that the use of your account runs smoothly and in accordance with the established rules. Before you begin, please review and accept our terms and conditions."

                                <p class="text-gray-500 text-base leading-relaxed dark:text-gray-400">
                                    "We are very excited to start your journey with us. Before creating an account, please review and accept our terms and conditions that will govern your use."

                                    "We appreciate your participation as our user. Before you can create an account, we kindly ask you to read and agree to our terms and conditions."

                                    "Before you can access our features, please read carefully and accept the terms and conditions we have set for the use of your account."

                                    "We are committed to providing a safe and secure experience for every user. Before creating an account, please read and accept our terms and conditions."

                                    "Before you start using your account, it is important to read and understand our terms and conditions. Please accept the terms and conditions to proceed." </p>
                                </p>
                            </div>
                            <!-- Modal footer -->
                            <div class="flex space-x-2 items-center p-6 border-t border-gray-200 rounded-b dark:border-gray-600">
                                <button data-modal-toggle="default-modal" type="submit" name="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
                                <button data-modal-toggle="default-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600">Decline</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<script src="https://unpkg.com/flowbite@1.4.4/dist/flowbite.js"></script>