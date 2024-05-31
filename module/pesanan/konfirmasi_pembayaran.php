<?php
$pesanan_id = $_GET["pesanan_id"];
?>

<form action="<?php echo BASE_URL . "module/pesanan/action.php?pesanan_id=$pesanan_id"; ?>" class="w-full max-w-lg" method="post" enctype="multipart/form-data">
    <div class="flex flex-wrap -mx-3 mb-3">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-select">
                Account Number
            </label>
            <input name="nomor_rekening" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-text" type="text" placeholder="Account Number">
        </div>
        <div class="w-full md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-text">
                Account Name
            </label>
            <input name="nama_account" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-text" type="text" placeholder="Account Name">
        </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-3">
        <div class="w-full px-3 mb-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-text">
                Transfer Date
            </label>
            <div class="relative mb-3" data-te-datepicker-init data-te-input-wrapper-init>
                <input name="tanggal_transfer" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-text" type="text" placeholder="Transfer Date">
            </div>
        </div>
    </div>

    <div class="w-full px-3 mb-6 md:mb-0">
        <div class="flex flex-wrap -mx-3 mb-6">

            <div class="w-full">
                <button type="submit" name="button" value="konfirmasi" data-mdb-ripple="true" class="inline-block px-8 py-3 bg-blue-600 text-white font-medium text-sm leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                    CONFIRMATION
                </button>
            </div>
        </div>
    </div>
</form>