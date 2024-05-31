<?php
$barang_id = isset($_GET['barang_id']) ? $_GET['barang_id'] : false;

$nama_barang = "";
$kategori_id = "";
$spesifikasi = "";
$gambar = "";
$stok = "";
$harga = "";
$status = "";
$keterangan_gambar = "";
$button = "Add";

if ($barang_id) {
    $query = mysqli_query($koneksi, "SELECT * FROM barang WHERE barang_id='$barang_id'");
    $row = mysqli_fetch_assoc($query);

    $nama_barang = $row['nama_barang'];
    $kategori_id = $row['kategori_id'];
    $spesifikasi = $row['spesifikasi'];
    $gambar = $row['gambar'];
    $stok = $row['stok'];
    $harga = $row['harga'];
    $status = $row['status'];
    $button = "Update";

    $keterangan_gambar = "(Click Choose File if you want to replace the image below)";
    $gambar = "<img src='" . BASE_URL . "/image/barang/$gambar' style='width :200px; vertical-align: middle;' />";
}
?>

<form action="<?php echo BASE_URL . "module/barang/action.php?barang_id=$barang_id"; ?>" class="w-full max-w-lg" method="post"  enctype="multipart/form-data">
    <div class="flex flex-wrap -mx-3 mb-3">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-select">
                Category
            </label>
            <div class="flex justify-center">
                <div class="mb-3 xl:w-96 appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-1.5 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                    <select name="kategori_id" data-te-select-init>

                        <?php
                        $query = mysqli_query($koneksi, "SELECT kategori_id, kategori FROM kategori WHERE status='on' ORDER BY kategori ASC");
                        while ($row = mysqli_fetch_assoc($query)) {
                            if ($kategori_id == $row['kategori_id']) { ?>
                                <option value="<?php echo $row['kategori_id']; ?>" selected="true"><?php echo $row['kategori'] ?></option>
                            <?php  } else { ?>
                                <option value="<?php echo $row['kategori_id']; ?>"><?php echo $row['kategori'] ?></option>

                        <?php
                            }
                        }
                        ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="w-full md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-text">
                Items Name
            </label>
            <input name="nama_barang" value="<?php echo $nama_barang; ?>" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-text" type="text" placeholder="Items Name">
        </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-3">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-text">
                Specification
            </label>
            <input name="spesifikasi" value="<?php echo $spesifikasi; ?>" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-text" type="text" placeholder="Specification">
        </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-3">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-text">
                Stock
            </label>
            <input name="stok" value="<?php echo $stok; ?>" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-text" type="text" placeholder="Stock">
        </div>
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-text">
                Price
            </label>
            <input name="harga" value="<?php echo $harga; ?>" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-text" type="text" placeholder="Price">
        </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-3">
        <div class="w-full px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-text">
                Products Picture <br>
                <?php echo $keterangan_gambar; ?>
            </label>
            <div class="flex justify-center">
                <div class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                    <input type="file" name="file" class="relative mb-2 block w-full flex-auto cursor-pointer rounded border border-solid border-neutral-300 bg-white bg-clip-padding px-3 py-1.5 text-base font-normal text-neutral-700 outline-none transition duration-300 ease-in-out file:-mx-3 file:-my-1.5 file:cursor-pointer file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-1.5 file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[margin-inline-end:0.75rem] file:[border-inline-end-width:1px] hover:file:bg-neutral-200 focus:border-primary focus:bg-white focus:text-neutral-700 focus:shadow-[0_0_0_1px] focus:shadow-primary focus:outline-none dark:bg-transparent dark:text-neutral-200 dark:focus:bg-transparent"/>
                    <?php echo $gambar; ?>
                </div>
            </div>
        </div>
    </div>


    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-status">
                Status
            </label>
            <div class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                <div class="flex justify-center">
                    <div class="mb-[0.125rem] mr-4 inline-block min-h-[1.5rem] pl-[1.5rem]">
                        <input name="status" value="on" <?php if ($status == "on") {
                                                            echo "checked='true'";
                                                        } ?> class="relative float-left mt-0.5 mr-1 -ml-[1.5rem] h-5 w-5 appearance-none rounded-full border-2 border-solid border-[rgba(0,0,0,0.25)] bg-white before:pointer-events-none before:absolute before:h-4 before:w-4 before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] after:absolute after:z-[1] after:block after:h-4 after:w-4 after:rounded-full after:bg-white after:content-[''] checked:border-primary checked:bg-white checked:before:opacity-[0.16] checked:after:absolute checked:after:left-1/2 checked:after:top-1/2 checked:after:h-[0.625rem] checked:after:w-[0.625rem] checked:after:rounded-full checked:after:border-primary checked:after:bg-primary checked:after:content-[''] checked:after:[transform:translate(-50%,-50%)] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:border-primary checked:focus:bg-white checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s]" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" />
                        <label class="mt-px inline-block pl-[0.15rem] hover:cursor-pointer" for="inlineRadio1">On</label>
                    </div>
                    <div class="mb-[0.125rem] mr-4 inline-block min-h-[1.5rem] pl-[1.5rem]">
                        <input name="status" value="off" <?php if ($status == "off") {
                                                                echo "checked='true'";
                                                            } ?> class="relative float-left mt-0.5 mr-1 -ml-[1.5rem] h-5 w-5 appearance-none rounded-full border-2 border-solid border-[rgba(0,0,0,0.25)] bg-white before:pointer-events-none before:absolute before:h-4 before:w-4 before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] after:absolute after:z-[1] after:block after:h-4 after:w-4 after:rounded-full after:bg-white after:content-[''] checked:border-primary checked:bg-white checked:before:opacity-[0.16] checked:after:absolute checked:after:left-1/2 checked:after:top-1/2 checked:after:h-[0.625rem] checked:after:w-[0.625rem] checked:after:rounded-full checked:after:border-primary checked:after:bg-primary checked:after:content-[''] checked:after:[transform:translate(-50%,-50%)] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:border-primary checked:focus:bg-white checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s]" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" />
                        <label class="mt-px inline-block pl-[0.15rem] hover:cursor-pointer" for="inlineRadio2">Off</label>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="w-full px-3 mb-6 md:mb-0">
        <div class="flex flex-wrap -mx-3 mb-6">

            <div class="w-full">
                <button value="<?php echo $button; ?>" type="submit" name="button" data-mdb-ripple="true" class="inline-block px-8 py-3 bg-blue-600 text-white font-medium text-sm leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                    <?php echo $button; ?>
                </button>
            </div>
        </div>
    </div>
</form>