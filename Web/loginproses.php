<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($mysqli, "SELECT * FROM pengguna WHERE username='$username' AND password='$password'");

// Periksa apakah query berhasil dieksekusi
if ($login) {
    $cek = mysqli_num_rows($login);

    if ($cek > 0) {
        $data = mysqli_fetch_assoc($login);

        if ($data['Role'] == "admin") {
            $_SESSION['username'] = $username;
            $_SESSION['Role'] = "admin";
            header("Location:admin/adminuser.php");
        } else if ($data['Role'] == "user") {
            $_SESSION['username'] = $username;
            $_SESSION['Role'] = "user";
            header("Location: user/home.php");
        } else {
            header("Location:../admin/adminuser.php");
        }
    } else {
        header("Location: index.php?pesan=gagal");
    }
} else {
    // Tampilkan pesan error jika query tidak berhasil dieksekusi
    echo "Error: " . mysqli_error($mysqli);
}
?>