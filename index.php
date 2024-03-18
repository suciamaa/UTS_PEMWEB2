<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="src/output.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    
    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
        </svg>
    </button>
    
    <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
        <a href="https://flowbite.com/" class="flex items-center ps-2.5 mb-5">
            <img src="https://flowbite.com/docs/images/logo.svg" class="h-6 me-3 sm:h-7" alt="Flowbite Logo" />
            <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">TOKO BARANG</span>
        </a>
        <ul class="space-y-2 font-medium">
            <li>
                <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                        <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z"/>
                        </svg>
                      <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Barang</span>
                      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                         <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                      </svg>
                </button>
                <ul id="dropdown-example" class=" py-2 space-y-2">
                      <li>
                         <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">List Barang</a>
                      </li>
                      <li>
                         <a href="tambah.php" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Tambah Barang</a>
                      </li>
                </ul>
             </li>
        </ul>
        </div>
    </aside>
    
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 rounded-lg dark:border-gray-700">
            
        <form class="max-w-xl mx-auto flex items-center rounded-lg py-auto px-auto pb-8" method="post" action="search.php">
        <label for="simple-search" class="sr-only">Search</label>
        <div class="relative w-full">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5v10M3 5a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 10a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm12 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0V6a3 3 0 0 0-3-3H9m1.5-2-2 2 2 2"/>
                </svg>
            </div>
            <input type="text" id="simple-search" name="search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 py-2.5 pr-8 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cari nama barang..." required />
        </div>
        <button type="submit" class="px-4 py-2.5 ml-4 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
            </svg>
            <span class="sr-only">Search</span>
        </button>
        </form>

            

            <div class="flex w-full items-center justify-between">
                <h4 class="text-xl font-medium">Barang Toko</h4>
                <ol aria-label="Breadcrumb" class="hidden min-w-0 items-center gap-2 whitespace-nowrap md:flex">
                    <li class="text-sm">
                        <a href="index.php" class="flex items-center gap-2 align-middle text-black transition-all hover:text-peach-500">
                            Barang
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7"/>
                            </svg>
                        </a>
                    </li>
                    <li aria-current="page" class="truncate text-sm font-medium text-peach-500 hover:text-primary-500">
                        <a href="index.php">List Barang</a>
                    </li>
                </ol>
            </div>

            <div class="grid grid-cols-1 pt-5">
                <div class="rounded-lg border border-default-200">

                    <div class="overflow-hidden px-6 py-4 justify-between gap-10">
                        <div class="flex items-center justify-between">
                            <h2 class="text-2xl text-black font-bold">List Barang</h2>
                            <div class="flex items-center justify-between">
                                <a href="../UTS_PEMWEB2/tambah.php" class="inline-flex rounded-xl bg-blue-600 px-6 py-2.5 text-l text-black hover:bg-blue-200 font-semibold">
                                    <svg class="w-6 h-6 text-black dark:text-blue" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/>
                                    </svg>
                                    <span>Add Barang</span>                                
                                </a>
                            </div>
                        </div>
                    </div>
              
            <div class="grid grid-cols gap-4 mb-4">
            <div class="relative overflow-x-auto">
                <div class="inline-block min-w-full align-middle">
                    <div class="overflow-hidden">
                        <table class="min-w-full divide-y divide-peach-100 justify-center">
                            <thead class="bg-gray-100 font-bold text-xl">
                                <tr>
                                    <th class="whitespaces-nowrap px-6 py-3 text-start text-sm font-bold text-peach-500">Id Barang</th>
                                    <th class="whitespaces-nowrap px-6 py-3 text-start text-sm font-bold text-peach-500">Nama Barang</th>
                                    <th class="whitespaces-nowrap px-6 py-3 text-start text-sm font-bold text-peach-500">Stok</th>
                                    <th class="whitespaces-nowrap px-6 py-3 text-start text-sm font-bold text-peach-500">Jenis Barang</th>
                                    <th class="whitespaces-nowrap px-6 py-3 text-start text-sm font-bold text-peach-500">Tanggal Expired</th>
                                    <th class="whitespaces-nowrap px-6 py-3 text-start text-sm font-bold text-peach-500">Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-peach-100 justify-center items-center">
                            <?php
                            include("koneksi.php");
                            $query = mysqli_query($koneksi, "SELECT * FROM tb_suciamalia_brg") or die(mysqli_error($koneksi));
                            if(mysqli_num_rows($query) == 0){ ?>
                                <tr><td colspan="6">Tidak ada data</td></tr>
                            <?php } else {
                                $no = 1;
                                while($data = mysqli_fetch_assoc($query)){
                            ?>
                                <tr>
                                    <td class="whitespace-nowrap px-6 py-4 text-sm font-medium text-peach-900"><?php echo $data['Id_brg']; ?></td>
                                    <td class="whitespace-nowrap px-6 py-4 text-sm font-medium text-peach-900"><?php echo $data['Nama_brg']; ?></td>
                                    <td class="whitespace-nowrap px-6 py-4 text-sm font-medium text-peach-900"><?php echo $data['Stok']; ?></td>
                                    <td class="whitespace-nowrap px-6 py-4 text-sm font-medium text-peach-900"><?php echo $data['Jenis_brg']; ?></td>
                                    <td class="whitespace-nowrap px-6 py-4 text-sm font-medium text-peach-900"><?php echo $data['Tgl_expired']; ?></td>
                                    <td class="whitespace-nowrap px-6 py-4 text-sm font-medium text-peach-900">
                                    <div class="flex gap-3">
                                        <a href="edit_barang.php?id=<?php echo $data['Id_brg']; ?>">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white hover:text-red-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.3 4.8 2.9 2.9M7 7H4a1 1 0 0 0-1 1v10c0 .6.4 1 1 1h11c.6 0 1-.4 1-1v-4.5m2.4-10a2 2 0 0 1 0 3l-6.8 6.8L8 14l.7-3.6 6.9-6.8a2 2 0 0 1 2.8 0Z"/>
                                            </svg>
                                        </a>
                                        <a href="delete.php?id=<?php echo $data['Id_brg']; ?>" onclick="return confirm('Apakah Anda Yakin ingin menghapus data ini?')">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white hover:text-red-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd" d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z" clip-rule="evenodd"/>
                                            </svg>
                                        </a>
                                       
                                    </div>

                                    </td>
                                <?php 
                               $no++;
                               } 
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
 



    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- * SCRIPT LOCAL -->
    <script src="src/js/script.js"></script>

    <script src="../UTS_PEMWEB2/node_modules/flowbite/dist/flowbite.min.js"></script>
</body>
</html>