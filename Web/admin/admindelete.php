<?php
include 'koneksi.php';

$id = $_GET['id'];

$hapus = mysqli_query($mysqli, "DELETE FROM pengguna WHERE id_pengguna = '$id'") or die(mysqli_error($mysqli));

if($hapus) {
    header("location: adminuser.php");
    exit();
}else{
    echo "Gagal menghapus user";
}
?>

