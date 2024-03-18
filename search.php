<?php
session_start(); // Mulai sesi

$host = "localhost";
$user = "root";
$pass = "";
$name = "uts_suciamalia_sireg4a";

$koneksi = mysqli_connect($host, $user, $pass, $name);
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

if(isset($_POST['search'])) {
    $search_query = $_POST['search'];
    $query = mysqli_query($koneksi, "SELECT * FROM tb_suciamalia_brg WHERE Nama_brg LIKE '%$search_query%'") or die(mysqli_error($koneksi));

    // Simpan hasil pencarian ke dalam variabel sesi
    $_SESSION['search_results'] = array();
    while($row = mysqli_fetch_assoc($query)) {
        $_SESSION['search_results'][] = $row;
    }
}
?>
