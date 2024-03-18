<!DOCTYPE html>
<html>
<head>
	<title>Tambah DATA MAHASISWA</title>

	<link rel="stylesheet" href="src/output.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<div class="max-w-md mx-auto mt-8 bg-white p-6 rounded-md shadow-md">
        <h2 class="text-2xl font-semibold text-center mb-6">Tambah Data Barang</h2>
        <p class="text-center pb-5"><a href="index.php" class="text-blue-500 hover:underline">Back to home</a></p>
        <form action="tambah-proses.php" method="post">
            <div class="space-y-4">
                <div class="flex items-center">
                    <label for="Id_brg" class="w-1/4">ID Barang</label>
                    <input type="text" name="Id_brg" id="Id_brg" class="form-input flex-1">
                </div>
                <div class="flex items-center">
                    <label for="Nama_brg" class="w-1/4">Nama Barang</label>
                    <input type="text" name="Nama_brg" id="Nama_brg" class="form-input flex-1">
                </div>
                <div class="flex items-center">
                    <label for="Stok" class="w-1/4">Stok</label>
                    <input type="number" name="Stok" id="Stok" class="form-input flex-1">
                </div>
                <div class="flex items-center">
                    <label for="Jenis_brg" class="w-1/4">Jenis Barang</label>
                    <select name="Jenis_brg" id="Jenis_brg" class="form-select flex-1">
                        <option value="">- Pilih Jenis Barang -</option>
                        <option value="Pecah Belah">Pecah Belah</option>
                        <option value="Mainan">Mainan</option>
                        <option value="Perabotan">Perabotan</option>
                        <option value="Mebel">Mebel</option>
                        <option value="Makanan">Makanan</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>
                <div class="flex items-center">
                    <label for="Tgl_expired" class="w-1/4">Tanggal Expired</label>
                    <input type="date" name="Tgl_expired" id="Tgl_expired" class="form-input flex-1">
                </div>
                <div class="text-center">
                    <input type="submit" value="TAMBAH" name="tambah" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 cursor-pointer">
                </div>
            </div>
        </form>
    </div>

	<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- * SCRIPT LOCAL -->
    <script src="src/js/script.js"></script>

    <script src="../../UTS_PEMWEB2/node_modules/flowbite/dist/flowbite.min.js"></script>
</body>
</html>