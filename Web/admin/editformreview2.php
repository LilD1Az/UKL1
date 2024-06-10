<?php

include("koneksi.php");

if(isset($_POST['simpan'])){

    $id = $_POST['id'];
    $name = $_POST['name'];
    $review = $_POST['review'];
    
    $result = mysqli_query($mysqli,"UPDATE reviews SET name='$name', review='$review'  WHERE id=$id");
    header('location:adminreview.php');
} else {
    die("Akses Dilarang..");
}