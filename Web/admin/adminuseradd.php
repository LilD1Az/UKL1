<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
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
        <h1 class="heading">Edit User</h1>
        <br>
        <br>

        <?php
        include 'koneksi.php';
        $id = $_GET['id'];
        $query_mysql = mysqli_query($mysqli, "SELECT * FROM pengguna WHERE id_pengguna='$id'") or die(mysqli_error($mysqli));
        $data = mysqli_fetch_array($query_mysql);
        ?>

        <form action="adminuserupdate.php" method="post">
            <table>
                <tr>
                    <td>Username</td>
                    <td>
                        <input type="hidden" name="id_pengguna" value="<?php echo $data['id_pengguna'] ?>">
                        <input type="text" name="username" value="<?php echo $data['username'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>
                        <input type="text" name="password" value="<?php echo $data['password'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>
                        <input type="text" name="email" value="<?php echo $data['email'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>Role</td>
                    <td>
                        <input type="text" name="Role" value="<?php echo $data['Role'] ?>">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Update"></td>
                </tr>
            </table>
        </form>
    </section>