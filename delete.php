<?php 
include("koneksi.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $cek = mysqli_query($koneksi, "SELECT Id_brg FROM tb_suciamalia_brg WHERE Id_brg = '$id'") or die(mysqli_error($koneksi));

    if(mysqli_num_rows($cek) == 0){
        echo "<script>window.history.back()</script>";
    }
    else{
        $del = mysqli_query($koneksi, "DELETE FROM tb_suciamalia_brg WHERE Id_brg = '$id'");

        if($del){
            echo "BERHASIL MENGHAPUS DATA";
        }
        else{
            echo "GAGAL MENGHAPUS DATA";
        }
        echo "<br>";
        echo "<a href='index.php'>Back</a>";
    }
}
?>
