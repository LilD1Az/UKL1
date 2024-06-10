<?php
include 'koneksi.php';

$title = mysqli_real_escape_string($conn, $_POST['title']);
$content = mysqli_real_escape_string($conn, $_POST['content']);

// Proses upload gambar
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
$check = getimagesize($_FILES["image"]["tmp_name"]);

if($check !== false) {
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        $image = basename($_FILES["image"]["name"]); // Gunakan nama file sebagai referensi

        $query = "INSERT INTO articles (title, content, image) VALUES ('$title', '$content', '$image')";
        if (mysqli_query($conn, $query)) {
            echo "Article uploaded successfully!";
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }

    } else {
        die("Sorry, there was an error uploading your file.");
    }
} else {
    die("File is not an image.");
}

mysqli_close($conn);
?>