<!-- Carousel -->
<section>
    <div class="md:flex border-t-2 justify-between bg-gray-800 px-10 gap-x-5">
        <div class="md:w-1/2 mb-10 md:mb-0 py-[35px] font-rubik">
            <h2 class="text-2xl md:text-4xl lg:text-6xl text-gray-200 mb-2 text-center md:text-left">Welcome to EXCEED!</h2>
            <p class="mb-6 text-lg text-center text-gray-200 md:text-left">Providing The Best Products For You.</p>
            <a href="#getstarted" class="inline-block py-2 px-5 text-lg bg-gray-100 rounded text-gray-800 hover:bg-gray-200 mr-2 font-semibold">Get Started</a>
            <a href="#shopping" class="inline-block py-2 px-5 text-lg bg-yellow-500 text-gray-800 rounded hover:bg-yellow-300 font-semibold">Shop Now <i class="fas fa-chevron-right"></i></a>
            <h2 class="text-2xl md:text-4xl lg:text-6xl text-gray-200 mb-6 mt-10 text-center md:text-left">Our Product</h2>
            <div class="pr-[200px] max-h-[100rem] text-gray-200">
                <!-- Tile 1 -->
                <?php
                if ($kategori_id) {
                    $query = mysqli_query($koneksi, "SELECT * FROM barang WHERE status ='on' AND kategori_id ='$kategori_id' AND stok != 1 ORDER BY rand() DESC LIMIT 1");
                } else {
                    $query = mysqli_query($koneksi, "SELECT * FROM barang WHERE status ='on' AND stok != 1 ORDER BY rand() DESC LIMIT 1");
                }
                $no = 1;
                while ($row = mysqli_fetch_assoc($query)) { ?>
                    <div class="flex bg-gray-700 rounded-lg p-4 m-2">
                        <div class="">
                            <a href="index.php?page=detail&barang_id=<?php echo $row['barang_id'] ?>">
                                <img class="w-64 rounded" src="image/barang/<?php echo $row['gambar'] ?>" alt="">
                            </a>
                        </div>
                        <div class="flex flex-col items-start ml-4">
                            <h4 class="text-xl font-bold"><?php echo $row['nama_barang'] ?></h4>
                            <h4 class="text-xl font-semibold mt-2"><?php echo rupiah($row['harga']) ?></h4>
                            <p class="text-sm">Stock : <?php echo  $row['stok'] ?></p>
                            <a <?php if ($user_id) { ?> href="index.php?page=tambah_keranjang&barang_id=<?php echo $row['barang_id'] ?>" <?php } else { ?> href="index.php?page=login&notif=false&Action" <?php } ?> class="inline-block p-3 mt-3 bg-blue-500 text-gray-200 font-medium text-sm leading-tight uppercase rounded shadow-md hover:bg-blue-600 hover:shadow-lg focus:bg-blue-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-700 active:shadow-lg transition duration-150 ease-in-out">+ Add To Cart</a>
                        </div>
                    </div>
                <?php
                    $no++;
                }
                ?>
            </div>
        </div>
        <div class="w-4/5 py-20">
            <style>
                * {
                    box-sizing: border-box;
                }

                .banner {
                    margin: 12px auto;
                }

                .content-slide {
                    margin: 0 auto;
                    max-width: 1328px;
                    max-height: 767px;
                    position: relative;
                    overflow: hidden;
                }

                .img-slide {
                    vertical-align: middle;
                    justify-content: center;
                    align-items: center;
                    max-width: 100%;
                    height: 767px;
                    background-size: cover;
                    background-repeat: no-repeat;
                    object-fit: contain;
                }

                .prev,
                #next {
                    cursor: pointer;
                    position: absolute;
                    display: flex;
                    top: 50%;
                    transform: translate(0, -50%);
                    width: auto;
                    padding: 16px;
                    color: rgb(250 250 250);
                    background-color: rgb(31 41 55);
                    font-weight: bold;
                    font-size: 2.6vh;
                    transition: 0.6s ease-in-out all;
                    border-radius: 0 3px 3px 0;
                    user-select: none;
                    opacity: 0;
                    height: 120px;
                    text-align: center;
                    justify-content: center;
                    align-items: center;
                }

                .prev:hover,
                #next:hover {
                    color: rgb(31 41 55);
                    background-color: rgb(250 250 250);
                }

                .text {
                    opacity: 0;
                    display: flex;
                    color: black;
                    flex-direction: column;
                    text-justify: center;
                    background: #f7f7f72b;
                    font-size: 15px;
                    padding: 8px 32px;
                    position: absolute;
                    bottom: 20px;
                    width: 100%;
                    text-align: center;
                    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                    font-weight: 500;
                    justify-content: center;
                    background-color: rgba(250, 250, 250, 0.8);
                    transition: 0.6s ease-in-out all;
                }

                .content-slide .numberslide {
                    color: black;
                    font-size: 12px;
                    padding: 12px 18px;
                    position: absolute;
                    bottom: 24px;
                }


                .fade {
                    -webkit-animation-name: fade;
                    -webkit-animation-duration: 1.2s;
                    animation-name: fade;
                    animation-duration: 1.2s;
                }

                @-webkit-keyframes fade {
                    from {
                        opacity: .2;
                    }

                    to {
                        opacity: 1;
                    }
                }

                @keyframes fade {
                    from {
                        opacity: .2;
                    }

                    to {
                        opacity: 1;
                    }
                }

                #container .page {
                    text-align: center;
                    padding-top: 20px;
                }

                .page {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }

                .page .dot {
                    position: relative;
                    top: -59px;
                    cursor: pointer;
                    width: 36px;
                    height: 8px;
                    border-radius: 1vh;
                    margin: 0 2px;
                    background-color: rgb(250 250 250);
                    display: inline-block;
                    transition: 0.6s ease;
                    border-radius: 2px;
                    opacity: 0.32;
                }

                .page .active,
                .page .dot:hover {
                    background-color: #24262b;
                    width: 36px;
                    height: 8px;
                    border-radius: 2px;
                }

                #next {
                    opacity: 0;
                    right: 0;
                    border-radius: 3px 0 0 3px;
                }

                .content-slide:hover .prev {
                    opacity: 1;
                }

                .content-slide:hover #next {
                    opacity: 1;
                    visibility: visible;
                }

                .content-slide:hover .text {
                    opacity: 1;
                }

                .content-slide:hover .page .dot {
                    opacity: 1;
                }
            </style>
            <div class="banner">

                <div class="content-slide">
                    <?php
                    $querySlider = mysqli_query($koneksi, "SELECT * FROM banner WHERE status='on' ORDER BY banner_id DESC LIMIT 4");

                    $no = 1;
                    while ($row = mysqli_fetch_assoc($querySlider)) {
                        $banner_id = $row["banner_id"];
                        $banner[$banner_id] = array(
                            "banner" => $row["banner"],
                            "gambar" => $row["gambar"],
                            "link"   => $row["link"],
                            "deskripsi" => $row["deskripsi"],
                            "sub_deskripsi" => $row["sub_deskripsi"]
                        );
                    }
                    $total = count($banner);
                    foreach ($banner as $key => $value) {
                        $banner_id = $key;

                        $banner = $value["banner"];
                        $gambar = $value["gambar"];
                        $link = $value["link"];
                        $deskripsi = $value["deskripsi"];
                        $sub_deskripsi = $value["sub_deskripsi"];

                        echo
                        "<div class='imgslide fade'>
                    <a  href='$link'><img class='img-slide' src='image/slide/$gambar' alt='Banner'></a>
                    ";
                        if ($deskripsi) {
                            echo "<div class='text'>
                            <span class='deskripsi>$deskripsi</span>
                            <span class='sub_deskripsi>$sub_deskripsi</span>
                        </div>";
                        }
                        echo "
                </div>
                <a id='next-prev' class='prev' onClick='nextslide(-1)'>&#10094;</a>
                <a  id='next' onClick='nextslide(1)'>&#10095;</a>
                
                ";
                        $no++;
                    }

                    ?>

                    <div class="page">
                        <?php
                        $no = 1;
                        while ($no <= 4) {
                            echo "<span class='dot' onclick='dotslide($no)'></span>";
                            $no++;
                        }
                        ?>
                    </div>
                </div>
            </div>
            <script>
                let start = 0;

                var slideIndex = 1;
                showSlide(slideIndex);
                const next = document.querySelector("#next");


                function nextslide(n) {
                    showSlide(slideIndex += n);
                }

                function dotslide(n) {
                    showSlide(slideIndex = n);
                }

                function showSlide(n) {
                    var i;
                    var slides = document.getElementsByClassName("imgslide");
                    var dot = document.getElementsByClassName("dot");


                    if (n > slides.length) {
                        slideIndex = 1;
                    }

                    if (n < 1) {
                        slideIndex = slides.length;
                    }

                    for (let i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";
                    }

                    if (slideIndex > slides.length) {
                        slideIndex = 1;
                    }

                    for (i = 0; i < slides.length; i++) {
                        dot[i].className = dot[i].className.replace(" active", "");
                    }


                    slides[slideIndex - 1].style.display = "block";
                    dot[slideIndex - 1].className += " active";



                }
                setInterval(() => {
                    next.click();
                }, 10000);
            </script>
        </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#1f2937" fill-opacity="1" d="M0,64L80,58.7C160,53,320,43,480,69.3C640,96,800,160,960,165.3C1120,171,1280,117,1360,90.7L1440,64L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path>
    </svg>
</section>

<section id="getstarted">
    <h3 class="text-3xl font-bold uppercase text-center mb-10 pt-10">playing experience</h3>
    <div class="flex items-center flex-wrap h-full g-6">
        <div class="w-6/12 mb-12 mx-6">
            <img src="image/articel/1.jpg" class="w-full rounded" alt="Articel-1" />
        </div>
        <div class="ml-20 w-5/12 mb-12">
            <div class="flex flex-row items-center justify-center">
                <p class="text-2xl font-medium ml-6 text-justify">Experience ultimate comfort while playing the guitar with our meticulously crafted instruments. Our guitars are designed with ergonomics in mind, providing a natural fit and reducing strain on your hands and body. Effortlessly glide across the smooth fretboard, allowing for seamless movement and precise playing. The balanced sound and optimized weight distribution further enhance your playing experience. Whether you're a beginner or an experienced player, our guitars combine comfort and quality for an enjoyable musical journey. Discover the joy of playing with a guitar that feels like an extension of yourself.</p>
            </div>
        </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#e5e7eb" fill-opacity="1" d="M0,256L40,240C80,224,160,192,240,197.3C320,203,400,245,480,218.7C560,192,640,96,720,53.3C800,11,880,21,960,42.7C1040,64,1120,96,1200,106.7C1280,117,1360,107,1400,101.3L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
    </svg>
</section>

<section>
    <div class="bg-gray-200">
        <h3 class="text-3xl font-bold uppercase text-center mb-10">best quality</h3>
        <div class="flex items-center flex-wrap h-full g-6">

            <div class="mr-20 w-5/12 mb-12">
                <div class="flex flex-row items-center justify-center">
                    <p class="text-2xl font-medium ml-6 text-justify">Discover the epitome of guitar quality with our instruments. Meticulously crafted using premium materials, our guitars offer exceptional sound and durability. Experience rich, balanced tones and effortless playability. From versatile models to cater to various genres, our guitars are designed to inspire. Choose our guitars for an unparalleled musical journey. Elevate your music with the best.</p>
                </div>
            </div>
            <div class="w-6/12 mb-12 mx-6">
                <img src="image/articel/2.jpg" class="w-full rounded" alt="Articel-2" />
            </div>
        </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#e5e7eb" fill-opacity="1" d="M0,64L40,64C80,64,160,64,240,85.3C320,107,400,149,480,160C560,171,640,149,720,149.3C800,149,880,171,960,154.7C1040,139,1120,85,1200,58.7C1280,32,1360,32,1400,32L1440,32L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path>
    </svg>
</section>


<section id="shopping">
    <a href="<?php echo BASE_URL . "index.php#shopping"; ?>">
        <h3 class="text-3xl font-bold uppercase text-center pt-10">OUR PRODUCT</h3>
    </a>
    <p class="text-lg text-center font-semibold mb-10">Click Image For Product Details</p>

    <?php
    $kategori_id = @$_GET['kategori_id'];
    echo kategori($kategori_id);
    ?>
    <div class="my-1 border-t border-gray-800"></div>
    <div class="flex justify-center mt-10 font-rubik">
        <div class="grid xl:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-2 max-w-[94rem]">
            <!-- Tile 1 -->
            <?php
            if ($kategori_id) {
                $query = mysqli_query($koneksi, "SELECT * FROM barang WHERE status ='on' AND kategori_id ='$kategori_id' AND stok != 1 ORDER BY rand() DESC LIMIT 9");
            } else {
                $query = mysqli_query($koneksi, "SELECT * FROM barang WHERE status ='on' AND stok != 1 ORDER BY rand() DESC LIMIT 9");
            }
            $no = 1;
            while ($row = mysqli_fetch_assoc($query)) { ?>
                <div class="flex bg-gray-200 rounded-lg p-5 m-3">
                    <div class="">
                        <a href="index.php?page=detail&barang_id=<?php echo $row['barang_id'] ?>">
                            <img class="w-64 rounded" src="image/barang/<?php echo $row['gambar'] ?>" alt="">
                        </a>
                    </div>
                    <div class="flex flex-col items-start ml-4">
                        <h4 class="text-xl font-bold"><?php echo $row['nama_barang'] ?></h4>
                        <h4 class="text-xl font-semibold mt-2"><?php echo rupiah($row['harga']) ?></h4>
                        <p class="text-sm">Stock : <?php echo  $row['stok'] ?></p>
                        <a <?php if ($user_id) { ?> href="index.php?page=tambah_keranjang&barang_id=<?php echo $row['barang_id'] ?>" <?php } else { ?> href="index.php?page=login&notif=false&Action" <?php } ?> class="inline-block p-3 mt-3 bg-blue-500 text-gray-200 font-medium text-sm leading-tight uppercase rounded shadow-md hover:bg-blue-600 hover:shadow-lg focus:bg-blue-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-700 active:shadow-lg transition duration-150 ease-in-out">+ Add To Cart</a>
                    </div>
                </div>
            <?php
                $no++;
            }
            ?>
        </div>
    </div>
</section>
<div class="relative overflow-hidden bg-cover bg-[50%] mt-32 bg-no-repeat bg-clip-content">
    <img src="https://cdn.suwalls.com/wallpapers/music/guitar-on-the-grass-43941-2560x1600.jpg" class="w-screen object-none max-h-[30rem]" />
    <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-fixed" style="background-color: hsla(0, 0%, 0%, 0.6)">
        <div class="flex h-full items-center justify-center">
            <div class="flex-row">
                <p class="text-white capitalize text-2xl">We Also Buy Used Guitars (In Good Condition)</p>
                <p class="text-white capitalize text-lg mb-4 text-center">Interested In Selling?</p>
                <a href="#" class="flex justify-center inline-block py-2 px-5 text-lg bg-yellow-500 text-gray-800 rounded hover:bg-yellow-300">Contact US!</a>
            </div>
        </div>
    </div>
</div>
<div class="m-5">
    <h3 class="text-2xl font-bold mb-5">FOLLOW US!</h3>
    <div class="space-x-3">

        <button class="bg-blue-500 px-4 py-2 font-semibold text-white inline-flex items-center space-x-2 rounded">
            <svg class="w-5 h-5 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
            </svg>
            <span>Facebook</span>
        </button>
        <button class="bg-blue-400 px-4 py-2 font-semibold text-white inline-flex items-center space-x-2 rounded">
            <svg class="w-5 h-5 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
            </svg>
            <span>Twitter</span>
        </button>
        <button class="bg-red-600 px-4 py-2 font-semibold text-white inline-flex items-center space-x-2 rounded">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-current" fill="currentColor" viewBox="0 0 24 24">
                <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z" />
            </svg> <span>Youtube</span>
        </button>
        <button class="bg-pink-600 px-4 py-2 font-semibold text-white inline-flex items-center space-x-2 rounded">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-current" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
            </svg>
            <span>Instagram</span>
        </button>
    </div>
</div>