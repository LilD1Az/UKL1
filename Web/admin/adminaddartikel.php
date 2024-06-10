<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>(Admin) Add Artikel</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Signika:wght@400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="style_add.css">
</head>
<body>
    <div class="regist-container">
        <h1 class="title">Add Artikel</h1>
        <form class="form" action="adminaddartikel.php" method="post" enctype="multipart/form-data">

            <label for="title">Title:</label>
            <input type="text" name="title" required><br>

            <label for="content">Content:</label>
            <textarea name="content" required></textarea><br>

            <label for="image">Image:</label>
            <input type="file" name="image"><br>

            <button class="button" type="submit" name="Submit">Add</button>
        </form>
    </div>

    <?php
    if (isset($_POST['Submit'])) {
        $title = $_POST['title'];
        $content = $_POST['content'];
        $image = '';

        if (!empty($_FILES['image']['name'])) {
            $target_dir = "../user/uploads/";
            $target_file = $target_dir . basename($_FILES["image"]["name"]);
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                $image = basename($_FILES["image"]["name"]);
            }
        }

        include_once("koneksi.php");

        $result = mysqli_query($mysqli, "INSERT INTO articles (title, content, image) VALUES ('$title', '$content', '$image')");

        if ($result) {
            header("Location: adminartikel.php");
        } else {
            echo "Error: " . mysqli_error($mysqli);
        }
    }
    ?>
</body>
</html>
