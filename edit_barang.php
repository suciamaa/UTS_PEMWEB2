<!DOCTYPE html>
<html>
<head>
    <title>Tambah/Edit Data Barang</title>

    <link rel="stylesheet" href="src/output.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<div class="max-w-md mx-auto mt-8 bg-white p-6 rounded-md shadow-md">
    <h2 class="text-2xl font-semibold text-center mb-6">Tambah/Edit Data Barang</h2>
    <p class="text-center pb-5"><a href="index.php" class="text-blue-500 hover:underline">Back to home</a></p>
    <?php 
        include("koneksi.php");

        if(isset($_GET['id'])){
            $id = $_GET['id'];

            // Mendapatkan data barang berdasarkan id
            $query = mysqli_query($koneksi, "SELECT * FROM tb_suciamalia_brg WHERE Id_brg = '$id'");
            $data = mysqli_fetch_assoc($query);

            if(mysqli_num_rows($query) == 0){
                echo "<script>window.history.back()</script>";
            }
        }
        else{
            echo "<script>window.history.back()</script>";
        }

        if(isset($_POST['submit'])) {
            // Mendapatkan data dari formulir
            $Id_brg = $_POST['Id_brg'];
            $Nama_brg = $_POST['Nama_brg'];
            $Stok = $_POST['Stok'];
            $Jenis_brg = $_POST['Jenis_brg'];
            $Tgl_expired = $_POST['Tgl_expired'];

            // Perbarui data dalam basis data jika id barang tersedia, jika tidak tambahkan data baru
            if(isset($_GET['id'])){
                $query_update = "UPDATE tb_suciamalia_brg SET Nama_brg = '$Nama_brg', Stok = '$Stok', Jenis_brg = '$Jenis_brg', Tgl_expired = '$Tgl_expired' WHERE Id_brg = '$Id_brg'";
            } else {
                $query_update = "INSERT INTO tb_suciamalia_brg(Id_brg, Nama_brg, Stok, Jenis_brg, Tgl_expired) VALUES ('$Id_brg', '$Nama_brg', '$Stok', '$Jenis_brg', '$Tgl_expired')";
            }
            
            $update = mysqli_query($koneksi, $query_update);

            if($update) {
                echo "<script>alert('Data berhasil disimpan');</script>";
                echo "<meta http-equiv='refresh' content='0; url=index.php'>";
            } else {
                echo "<script>alert('Gagal menyimpan data');</script>";
            }
        }
    ?>
    <form method="post">
        <input type="hidden" name="Id_brg" value="<?php echo isset($data['Id_brg']) ? $data['Id_brg'] : ''; ?>">
        <div class="space-y-4">
            <div class="flex items-center">
                <label for="Id_brg" class="w-1/4">ID Barang</label>
                <input type="text" name="Id_brg" id="Id_brg" class="form-input flex-1" value="<?php echo isset($data['Id_brg']) ? $data['Id_brg'] : ''; ?>">
            </div>
            <div class="flex items-center">
                <label for="Nama_brg" class="w-1/4">Nama Barang</label>
                <input type="text" name="Nama_brg" id="Nama_brg" class="form-input flex-1" value="<?php echo isset($data['Nama_brg']) ? $data['Nama_brg'] : ''; ?>">
            </div>
            <div class="flex items-center">
                <label for="Stok" class="w-1/4">Stok</label>
                <input type="number" name="Stok" id="Stok" class="form-input flex-1" value="<?php echo isset($data['Stok']) ? $data['Stok'] : ''; ?>">
            </div>
            <div class="flex items-center">
                <label for="Jenis_brg" class="w-1/4">Jenis Barang</label>
                <select name="Jenis_brg" id="Jenis_brg" class="form-select flex-1">
                    <option value="">- Pilih Jenis Barang -</option>
                    <option value="Pecah Belah" <?php echo isset($data['Jenis_brg']) && $data['Jenis_brg'] == 'Pecah Belah' ? 'selected' : ''; ?>>Pecah Belah</option>
                    <option value="Mainan" <?php echo isset($data['Jenis_brg']) && $data['Jenis_brg'] == 'Mainan' ? 'selected' : ''; ?>>Mainan</option>
                    <option value="Perabotan" <?php echo isset($data['Jenis_brg']) && $data['Jenis_brg'] == 'Perabotan' ? 'selected' : ''; ?>>Perabotan</option>
                    <option value="Mebel" <?php echo isset($data['Jenis_brg']) && $data['Jenis_brg'] == 'Mebel' ? 'selected' : ''; ?>>Mebel</option>
                    <option value="Makanan" <?php echo isset($data['Jenis_brg']) && $data['Jenis_brg'] == 'Makanan' ? 'selected' : ''; ?>>Makanan</option>
                    <option value="Lainnya" <?php echo isset($data['Jenis_brg']) && $data['Jenis_brg'] == 'Lainnya' ? 'selected' : ''; ?>>Lainnya</option>
                </select>
            </div>
            <div class="flex items-center">
                <label for="Tgl_expired" class="w-1/4">Tanggal Expired</label>
                <input type="date" name="Tgl_expired" id="Tgl_expired" class="form-input flex-1" value="<?php echo isset($data['Tgl_expired']) ? $data['Tgl_expired'] : ''; ?>">
            </div>
            <div class="text-center">
                <input type="submit" name="submit" value="Simpan" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 cursor-pointer">
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
