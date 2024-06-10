<?php
include 'koneksi.php';

$id = $_GET['id'];

$hapus = mysqli_query($mysqli, "DELETE FROM reviews WHERE id= '$id'") or die(mysqli_error($mysqli));

if($hapus) {
    header("Location:adminreview.php");
    exit();
} else {
    echo "Gagal menghapus produk.";
}
?>