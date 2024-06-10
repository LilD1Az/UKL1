<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>(Admin) User Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Signika:wght@400;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="header">
        <div class="logo">
        </div>
        <i class='bx bx-menu' id="menu-icon"></i>
        <ul class="navbar">
            <li><a href="adminuser.php" class="btn-active">User</a></li>
            <li><a href="adminreview.php" class="btn-nav">Review</a></li>
            <li><a href="adminartikel.php" class="btn-nav">Artikel</a></li>
        </ul>
    </header>
    <section class="user">
        <h1 class="heading">Artikel</h1>
        <br><br>
        <a href="adminaddartikel.php" class="btn">Add Artikel</a>
        <br><br>
        <table border="1" class="table">
            <tr>
                <th class="text">No.</th>
                <th class="text">Id</th>
                <th class="text">content</th>
                <th class="text">title</th>
                <th class="text">image</th>
                <th class="text">created_at</th>
                <th>Action</th>
                <th>Action</th>
            </tr>
            <?php
                include 'koneksi.php';
                $query_mysql = mysqli_query($mysqli, "SELECT * FROM articles") or die(mysqli_error($mysqli));
                $nomor = 1;
                while ($data = mysqli_fetch_array($query_mysql)) {
                    ?>
                    <tr>
                        <td><?php echo $nomor++; ?></td>
                        <td><?php echo $data['id']; ?></td>
                        <td><?php echo $data['content']; ?></td>
                        <td><?php echo $data['title']; ?></td>
                        <td>
                            <?php if ($data['image']) { ?>
                                <img src="../user/uploads/<?php echo $data['image']; ?>" alt="Article Image" style="width:100px;">
                            <?php } else { ?>
                                No Image
                            <?php } ?>
                        </td>
                        <td><?php echo $data['created_at']; ?></td>
                        <td class="action">
                            <a href="adminartikeldelete.php?id=<?= $data["id"]; ?>" 
                               onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');" 
                               class="btn" style="margin:5px; padding:10px;">
                               Delete
                            </a>
                        </td>
                        <td class="action">
                            <a href="editreviewform.php?id=<?php echo $data['id']; ?>" class="btn-update">Update</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
            <br><br>
            <a href="../index.php" class="btn">Log Out</a>
        </section>
    </body>
    </html>