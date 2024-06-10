<?php
$databaseHost = "localhost";
$databaseName = "webril";
$databaseUsername = "root";
$databasePassword = "";

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if($mysqli){
    echo ".<br/>";
}else{
    echo "koneksi gagal.<br/>";
}
?>

