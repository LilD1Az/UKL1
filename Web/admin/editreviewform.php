<?php
include 'koneksi.php';

if(isset($_POST['update'])) {
    $id_pengguna = intval($_POST['id_pengguna']); // Ensure the ID is treated as an integer
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $Role = $_POST['Role'];

    // Perform the data update process in the database
    $query = "UPDATE reviews SET name='$name', email='$email', review='$review', created_at='created_at' WHERE id=$id";
    $result = mysqli_query($mysqli, $query);

    if($result) {
        echo "Data berhasil diperbarui.";
        header("Location: adminuser.php"); // Redirect back to the user data page
        exit();
    } else {
        echo "Terjadi kesalahan: " . mysqli_error($mysqli);
    }
}

if(isset($_GET['id_pengguna'])) {
    $id_user = intval($_GET['id_pengguna']); // Ensure the ID is treated as an integer
    $query = "SELECT * FROM pengguna WHERE id_pengguna =$id_pengguna";
    $result = mysqli_query($mysqli, $query);

    if ($result) {
        $data = mysqli_fetch_assoc($result);
        if (!$data) {
            echo "Data user tidak ditemukan.";
            exit();
        }
    } else {
        echo "Terjadi kesalahan: " . mysqli_error($mysqli);
        exit();
    }
} else {
    echo "ID pengguna tidak diberikan.";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <link rel="stylesheet" href=".css">
</head>
<body>
<div class="container">
    <header>
        <h1 class="title">Update User</h1>
    </header>
    <section class="form">
        <form method="POST" action="">
            <input type="hidden" name="id_pengguna" value="<?php echo htmlspecialchars($data['id_pengguna']); ?>">

            <input type="text" id="username" name="username" placeholder="Username" value="<?php echo htmlspecialchars($data['username']); ?>"><br>

            <input type="password" id="password" name="password" placeholder="password" value="<?php echo htmlspecialchars($data['password']); ?>"><br>

            <input type="email" id="email" name="email" placeholder="Email" value="<?php echo htmlspecialchars($data['email']); ?>"><br><br>

            <input type="level" id="Role" name="Role" placeholder="Role" value="<?php echo htmlspecialchars($data['Role']); ?>"><br>
            <input type="submit" name="update" value="Update" class="button">
        </form>
    </section>
</div>
</body>
</html>