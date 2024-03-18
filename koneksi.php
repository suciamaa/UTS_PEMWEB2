<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $name = "uts_suciamalia_sireg4a";

    $koneksi = mysqli_connect($host, $user, $pass, $name);
    if (!$koneksi) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }
?>
