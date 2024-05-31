<?php
ob_start();
session_start();

include_once("function/koneksi.php");
include_once("function/helper.php");
$page = isset($_GET['page']) ? $_GET['page'] : false;

$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : false;
$nama = isset($_SESSION['nama']) ? $_SESSION['nama'] : false;
$level = isset($_SESSION['level']) ? $_SESSION['level'] : false;
$buyNow = isset($_SESSION['buyNow']) ? $_SESSION['buyNow'] : array();
$keranjang = isset($_SESSION['keranjang']) ? $_SESSION['keranjang'] : array();
$totalBarang = count($keranjang);
?>

<!DOCTYPE html>
<html lang="en" class="font-sans scroll-smooth">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="image/favicon.ico">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
  <script src="<?php echo  BASE_URL . "js/jquery-3.6.3.min.js" ?>"></script>
  <script src="https://cdn.tailwindcss.com/3.3.0"></script>
  <script>
    tailwind.config = {
      darkMode: "class",
      theme: {
        fontFamily: {
          sans: ["Poppins", "sans-serif"],
          mono: ["ui-monospace", "monospace"],
          rubik: ["Rubik", "sans-serif"],
        },
      },
      corePlugins: {
        preflight: false,
      },
    };
  </script>
  <title>
    <?php
    $filename = "$page.php";

    if (file_exists($filename)) {
      switch ($filename) {
        case "my_profile.php":
          echo "EXCEED | PROFILE";
          break;
        case "login.php":
          echo "EXCEED | LOGIN";
          break;
        case "register.php":
          echo "EXCEED | REGISTER";
          break;
        default:
          echo "EXCEED | HOME";
          break;
      }
    } else {
      echo "EXCEED";
    }
    ?>
  </title>
  <style>
    body {
      background: #edf2f7;
    }

    .two:hover span {
      width: 50%;
    }
  </style>
</head>

<body class="overflow-x-hidden">
  <div class="scroll"></div>
  <?php
  $kategori_id = @$_GET['kategori_id'];
  ?>
  <div class="flex flex-col h-screen">
    <?php
    if ($filename == "my_profile.php") {
      //KOSONG
    } else { ?>
      <header>
        <section class="mx-auto sticky top-0">
          <!-- navbar -->
          <nav class="flex justify-between bg-gray-800 text-white w-screen">
            <div class="px-5 xl:px-12 py-6 flex w-full items-center">
              <a rel="noopener noreferrer" href="<?php echo BASE_URL; ?>" class="flex space-x-3  justify-start">
                <div class="flex items-center justify-center">
                  <img class="h-12 rounded-full" src="<?php echo BASE_URL . "image/logo3.png"; ?>" alt="logo">
                </div>
                <span class="self-center text-2xl font-semibold"> <img class="h-9" src="<?php echo BASE_URL . "image/logo2.png"; ?>" alt="logo">
                </span>
              </a>
              <!-- <a href="<?php echo BASE_URL . "index.php?page=product" ?>" class="inline-block px-3 py-3 ml-7 bg-transparent text-xl  text-gray-200 font-bold leading-tight uppercase rounded hover:text-gray-800 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:ring-0 active:bg-gray-300 transition duration-150 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="light">Products</a> -->


              <?php
              if ($user_id) {
              ?>
                <!-- Nav Links -->
                <ul class="md:flex px-4 mx-auto font-semibold font-heading space-x-12">
                  <li>
                    <?php $filename = "$page.php";
                    if (file_exists($filename)) {
                      if ($filename == "main.php") {
                    ?> <p class="text-xl hover:text-gray-200 font-rubik">Welcome Back , <b class="uppercase"><?php echo $_SESSION["nama"] ?>!</b></p>
                    <?php } else {
                        echo "";
                      }
                    } else {
                      echo "";
                    } ?>
                  </li>
                </ul>
              <?php } else { ?>
                <ul class="hidden md:flex px-4 mx-auto font-semibold font-heading uppercase space-x-12">
                  <li>
                    <p class="text-xl hover:text-gray-200"> </p>
                  </li>
                </ul>
              <?php } ?>

              <?php
              if ($user_id) {
              ?>
                <!-- Header Icons -->

                <div class="hidden xl:flex space-x-5 items-center">
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
                  </a>


                  <!-- PROFILE -->
                  <div class="flex justify-center">
                    <a href="<?php echo BASE_URL . "index.php?page=my_profile&module=kategori&action=list" ?>" title="Profile">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                      </svg>
                    </a>
                  </div>
                  <a href="logout.php" class="inline-block px-4 py-3 bg-red-600 font-bold leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="light">Logout</a>

                <?php } else { ?>
                  <ul class="flex items-center font-semibold uppercase space-x-5">
                    <li>
                      <div class="flex items-center lg:ml-auto">
                        <a href="<?php echo BASE_URL . "index.php?page=login" ?>" class="inline-block px-6 py-3 mr-2 bg-transparent text-gray-200 font-bold leading-tight uppercase rounded hover:text-gray-800 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:ring-0 active:bg-gray-300 transition duration-150 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="light">Login</a>
                        <a href="<?php echo BASE_URL . "index.php?page=register" ?>" class="inline-block px-6 py-3 bg-gray-100 text-gray-800 font-bold leading-tight uppercase rounded shadow-md hover:bg-gray-200 hover:shadow-lg focus:bg-gray-200 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-300 active:shadow-lg transition duration-150 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="light">Sign up for free</a>
                      </div>
                    </li>
                  </ul>

                <?php } ?>
                </div>
          </nav>
        </section>
      </header>
    <?php } ?>
    <main class="mx-auto flex-grow">
      <section>
        <div>
          <?php
          $filename = "$page.php";

          if (file_exists($filename)) {
            include_once($filename);
          } else {
            include_once("main.php");
            // <div class="text-center text-2xl text-red-500 uppercase font-bold">File doesn't exists</div>
          }

          if (file_exists($filename)) {
            if ($filename == "data_pemesan.php") {
              echo "";
            } else if ($filename == "tambah_keranjang.php") {
              echo "";
            } else {
              unset($_SESSION["buyNow"]);
            }
          }
          ?>
        </div>
      </section>
    </main>

    <!-- Footer -->
    <footer class="font-rubik divide-y bg-gray-800 text-gray-200 <?php if ($filename == "my_profile.php") { ?> translate-y-full <?php } else { ?> translate-y-10 <?php } ?>">

      <div class="container flex py-10 mx-auto flex-row justify-between space-y-0">
        <div class="w-1/3">
          <a rel="noopener noreferrer" href="<?php echo BASE_URL; ?>" class="flex space-x-3 justify-start">
            <div class="flex items-center justify-center">
              <img class="h-12 rounded-full" src="<?php echo BASE_URL . "image/logo3.png"; ?>" alt="logo">
            </div>
            <span class="self-center text-2xl font-semibold"> <img class="h-9" src="<?php echo BASE_URL . "image/logo2.png"; ?>" alt="logo">
            </span>
          </a>
        </div>
        <div class="list-none">
          <p class="text-lg font-bold mb-6">ABOUT US</p>
          <li>
            <a href="#" class="inline-block h-12 -my-4 xs:h-auto">
              <svg class="inline-block w-4 h-4 mr-3 opacity-40" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
              </svg>: +62 812-3456-7891
            </a>
          </li>
          <li>
            <a href="#" class="inline-block h-12 -my-4 xs:h-auto">
              <svg class="inline-block w-4 h-6 mr-3 opacity-40" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"></path>
              </svg>: Bimasakti L-House No.2 Bermuda
            </a>
          </li>
        </div>
      </div>
      <div class="py-6 text-md text-center text-gray-200">© 2023 Exceed Company. All rights reserved.</div>
    </footer>
  </div> <!-- Tailwind  -->

  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.11.1/dist/cdn.min.js"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
</body>

</html>