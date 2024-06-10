<?php
include 'koneksi.php';

$name = $_POST['name'];
$email = $_POST['email'];
$review = $_POST['review'];

$query = "INSERT INTO reviews (name, email, review) VALUES ('$name', '$email', '$review')";
mysqli_query($conn, $query);

header('Location: review.php');
?>