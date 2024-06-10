<?php
include 'koneksi.php';

$id = $_GET['id'];

$hapus = mysqli_query($mysqli, "DELETE FROM articles WHERE id = '$id'") or die(mysqli_error($mysqli));

if($hapus) {
    header("location: adminartikel.php");
    exit();
}else{
    echo "Gagal menghapus user";
}
?>

