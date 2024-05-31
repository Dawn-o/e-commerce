<!-- Jumbotron -->
<div class="relative overflow-hidden bg-cover bg-no-repeat p-12 text-center" style="background-image: url('image/nebula.png'); height: 870px">
    <div class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed" style="background-color: rgba(0, 0, 0, 0.6)">
        <div class="flex h-full items-center justify-center">
            <div class="text-white">
                <h2 class="mb-4 text-4xl font-semibold">EXCEED</h2>
                <h4 class="mb-6 text-xl font-semibold">HARGA SULIT , KUALITAS ELIT</h4>
                <a type="button" <?php if ($user_id) {
                                        echo "href='#shopping'";
                                    } else { ?> data-te-toggle="modal" data-te-target="#exampleModal" href="" <?php } ?> class="rounded border-2 border-neutral-50 px-7 pt-[10px] pb-[8px] text-sm font-medium uppercase leading-normal text-neutral-50 transition duration-150 ease-in-out hover:border-neutral-100 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-neutral-100 focus:border-neutral-100 focus:text-neutral-100 focus:outline-none focus:ring-0 active:border-neutral-200 active:text-neutral-200 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10" data-te-ripple-init data-te-ripple-color="light">
                    SHOPPING
                </a>
                <!-- Modal -->
                <div data-te-modal-init class="fixed top-0 left-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div data-te-modal-dialog-ref class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
                        <div class="min-[576px]:shadow-[0_0.5rem_1rem_rgba(#000, 0.15)] pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
                            <div class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                                <h5 class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200" id="exampleModalLabel">
                                    YOU ARE NOT LOGIN!
                                </h5>
                                <button type="button" class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none" data-te-modal-dismiss aria-label="Close">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                            <div class="relative flex-auto p-4 text-neutral-800" data-te-modal-body-ref>
                                CONTINUE TO SIGN IN PAGE...?
                            </div>
                            <div class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                                <a href="#shopping"><button type="button" class="inline-block rounded bg-primary-100 px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200" data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="light">
                                        Close
                                    </button></a>
                                <a href="<?php echo BASE_URL . "index.php?page=login" ?>" class="ml-1 inline-block rounded bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]" data-te-ripple-init data-te-ripple-color="light">
                                    Yes
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="shopping"></div>
<!-- Jumbotron -->
<!-- Container for demo purpose -->
<div class="container my-24 px-6 mx-auto">

    <!-- Section: Design Block -->
    <section class="mb-32 text-gray-800 text-center">

        <h2 class="text-3xl font-bold mb-12 pb-4 text-center">Latest articles</h2>

        <div class="grid lg:grid-cols-3 gap-6 xl:gap-x-12">
            <div class="mb-6 lg:mb-0">
                <div class="relative block bg-white rounded-lg shadow-lg">
                    <div class="flex">
                        <div class="relative overflow-hidden bg-no-repeat bg-cover relative overflow-hidden bg-no-repeat bg-cover shadow-lg rounded-lg mx-4 -mt-4" data-mdb-ripple="true" data-mdb-ripple-color="light">
                            <img src="image/c.jpg" class="w-full" />
                            <a href="#!">
                                <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                            </a>
                        </div>
                    </div>
                    <div class="p-6">
                        <h5 class="font-bold text-lg mb-3">My paradise</h5>
                        <p class="text-gray-500 mb-4">
                            <small>Published <u>13.01.2022</u> by
                                <a href="" class="text-gray-900">Anna Maria Doe</a></small>
                        </p>
                        <p class="mb-4 pb-2">
                            Ut pretium ultricies dignissim. Sed sit amet mi eget urna
                            placerat vulputate. Ut vulputate est non quam dignissim
                            elementum. Donec a ullamcorper diam.
                        </p>
                        <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Read
                            more</a>
                    </div>
                </div>
            </div>

            <div class="mb-6 lg:mb-0">
                <div class="relative block bg-white rounded-lg shadow-lg">
                    <div class="flex">
                        <div class="relative overflow-hidden bg-no-repeat bg-cover relative overflow-hidden bg-no-repeat bg-cover shadow-lg rounded-lg mx-4 -mt-4" data-mdb-ripple="true" data-mdb-ripple-color="light">
                            <img src="image/a1.jpg" class="w-full" />
                            <a href="#!">
                                <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                            </a>
                        </div>
                    </div>
                    <div class="p-6">
                        <h5 class="font-bold text-lg mb-3">Travel to Italy</h5>
                        <p class="text-gray-500 mb-4">
                            <small>Published <u>12.01.2022</u> by
                                <a href="" class="text-gray-900">Halley Frank</a></small>
                        </p>
                        <p class="mb-4 pb-2">
                            Suspendisse in volutpat massa. Nulla facilisi. Sed aliquet
                            diam orci, nec ornare metus semper sed. Integer volutpat
                            ornare erat sit amet rutrum.
                        </p>
                        <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Read
                            more</a>
                    </div>
                </div>
            </div>

            <div class="mb-0">
                <div class="relative block bg-white rounded-lg shadow-lg">
                    <div class="flex">
                        <div class="relative overflow-hidden bg-no-repeat bg-cover relative overflow-hidden bg-no-repeat bg-cover shadow-lg rounded-lg mx-4 -mt-4" data-mdb-ripple="true" data-mdb-ripple-color="light">
                            <img src="image/b.jpg" class="w-full" />
                            <a href="#!">
                                <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                            </a>
                        </div>
                    </div>
                    <div class="p-6">
                        <h5 class="font-bold text-lg mb-3">Chasing the sun</h5>
                        <p class="text-gray-500 mb-4">
                            <small>Published <u>10.01.2022</u> by
                                <a href="" class="text-gray-900">Joe Svan</a></small>
                        </p>
                        <p class="mb-4 pb-2">
                            Curabitur tristique, mi a mollis sagittis, metus felis mattis
                            arcu, non vehicula nisl dui quis diam. Mauris ut risus eget
                            massa volutpat feugiat. Donec.
                        </p>
                        <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Read
                            more</a>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Section: Design Block -->

</div>
<!-- Container for demo purpose -->

<div class="flex items-center justify-center w-full h-full py-24 sm:py-8 px-4">
    <div class="w-full relative flex items-center justify-center">
        <button aria-label="slide backward" class="absolute z-30 left-0 ml-10 focus:outline-none focus:bg-gray-400 focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 cursor-pointer" id="prev">
            <svg class="dark:text-gray-900" width="24" height="24" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7 1L1 7L7 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </button>
        <div class="w-full h-full mx-auto overflow-x-hidden overflow-y-hidden">
            <div id="slider" class="h-full flex lg:gap-8 md:gap-6 gap-14 items-center justify-start transition ease-out duration-700">
                <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                    <img src="image/carousel/1.jpg" alt="black chair and white table" class="object-cover object-center w-full" />
                    <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                        <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">BEST SALES</h2>
                        <div class="flex h-full items-end pb-6">
                            <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">BEST SALES</h3>
                        </div>
                    </div>
                </div>
                <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                    <img src="image/carousel/2.jpg" alt="sitting area" class="object-cover object-center w-full" />
                    <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                        <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">BEST SALES</h2>
                        <div class="flex h-full items-end pb-6">
                            <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">BEST SALES</h3>
                        </div>
                    </div>
                </div>
                <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                    <img src="image/carousel/3.jpg" alt="sitting area" class="object-cover object-center w-full" />
                    <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                        <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">BEST SALES</h2>
                        <div class="flex h-full items-end pb-6">
                            <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">BEST SALES</h3>
                        </div>
                    </div>
                </div>
                <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                    <img src="image/carousel/4.jpg" alt="sitting area" class="object-cover object-center w-full" />
                    <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                        <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">BEST SALES</h2>
                        <div class="flex h-full items-end pb-6">
                            <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">BEST SALES</h3>
                        </div>
                    </div>
                </div>
                <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                    <img src="image/carousel/5.jpg" alt="black chair and white table" class="object-cover object-center w-full" />
                    <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                        <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">BEST SALES</h2>
                        <div class="flex h-full items-end pb-6">
                            <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">BEST SALES</h3>
                        </div>
                    </div>
                </div>
                <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                    <img src="image/carousel/6.jpg" alt="sitting area" class="object-cover object-center w-full" />
                    <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                        <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">BEST SALES</h2>
                        <div class="flex h-full items-end pb-6">
                            <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">BEST SALES</h3>
                        </div>
                    </div>
                </div>
                <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                    <img src="image/carousel/7.jpg" alt="sitting area" class="object-cover object-center w-full" />
                    <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                        <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">BEST SALES</h2>
                        <div class="flex h-full items-end pb-6">
                            <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">BEST SALES</h3>
                        </div>
                    </div>
                </div>
                <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                    <img src="image/carousel/8.jpg" alt="sitting area" class="object-cover object-center w-full" />
                    <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                        <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">BEST SALES</h2>
                        <div class="flex h-full items-end pb-6">
                            <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">BEST SALES</h3>
                        </div>
                    </div>
                </div>
                <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                    <img src="image/carousel/9.jpg" alt="black chair and white table" class="object-cover object-center w-full" />
                    <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                        <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">BEST SALES</h2>
                        <div class="flex h-full items-end pb-6">
                            <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">BEST SALES</h3>
                        </div>
                    </div>
                </div>
                <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                    <img src="image/carousel/5.jpg" alt="sitting area" class="object-cover object-center w-full" />
                    <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                        <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">BEST SALES</h2>
                        <div class="flex h-full items-end pb-6">
                            <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">BEST SALES</h3>
                        </div>
                    </div>
                </div>
                <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                    <img src="image/carousel/10.jpg" alt="sitting area" class="object-cover object-center w-full" />
                    <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                        <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">BEST SALES</h2>
                        <div class="flex h-full items-end pb-6">
                            <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">BEST SALES</h3>
                        </div>
                    </div>
                </div>
                <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                    <img src="image/carousel/11.jpg" alt="sitting area" class="object-cover object-center w-full" />
                    <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                        <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">BEST SALES</h2>
                        <div class="flex h-full items-end pb-6">
                            <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">BEST SALES</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button aria-label="slide forward" class="absolute z-30 right-0 mr-10 focus:outline-none focus:bg-gray-400 focus:ring-2 focus:ring-offset-2 focus:ring-gray-400" id="next">
            <svg class="dark:text-gray-900" width="24" height="24" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </button>
    </div>
</div>


<script>
    let defaultTransform = 0;

    function goNext() {
        defaultTransform = defaultTransform - 398;
        var slider = document.getElementById("slider");
        if (Math.abs(defaultTransform) >= slider.scrollWidth / 1.7) defaultTransform = 0;
        slider.style.transform = "translateX(" + defaultTransform + "px)";
    }
    next.addEventListener("click", goNext);

    function goPrev() {
        var slider = document.getElementById("slider");
        if (Math.abs(defaultTransform) === 0) defaultTransform = 0;
        else defaultTransform = defaultTransform + 398;
        slider.style.transform = "translateX(" + defaultTransform + "px)";
    }
    prev.addEventListener("click", goPrev);
</script>