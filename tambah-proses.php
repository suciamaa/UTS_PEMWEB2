<?php
include("koneksi.php");

if(isset($_POST['tambah'])) {
    $Id_brg = $_POST['Id_brg'];
    $Nama_brg = $_POST['Nama_brg'];
    $Stok = $_POST['Stok'];
    $Jenis_brg = $_POST['Jenis_brg'];
    $Tgl_expired = $_POST['Tgl_expired'];

    $query = "INSERT INTO tb_suciamalia_brg(Id_brg, Nama_brg, Stok, Jenis_brg, Tgl_expired) VALUES ('$Id_brg', '$Nama_brg', '$Stok', '$Jenis_brg', '$Tgl_expired')";
    
    if(mysqli_query($koneksi, $query)) {
        echo "<script>alert('Data berhasil ditambahkan');</script>";
        echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    } else {
        echo "<script>alert('Gagal menambahkan data. Silakan coba lagi.');</script>";
    }
}
?>
