<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Register</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container">
        <h1 class="title">Register</h1><br>
        <form class="form" action="register.php" method="post">
            <input type="email" name="email" placeholder="Email" required="required"> 
            <input type="text" name="username" placeholder="Username" required="required">
            <input type="password" name="password" placeholder="Password" required="required">
            <button class="button" name="sumbit" type="submit">Register</button>
            <?php
            if(isset($_POST['sumbit'])){
                $username= $_POST['username'];
                $password= $_POST['password'];
                $email= $_POST['email'];
                $Role='user';

                include_once("koneksi.php");

                $result = mysqli_query($mysqli,
                "INSERT INTO pengguna(username, password, email, Role) VALUES ('$username','$password','$email', 'user')");

                header("location:index.php");
            }
            ?>
            <div class="forgot">
            <a href="index.php">already have an account?</a>
        </div>
        <br>
    </div>
        </form>
    </div>
</body>
</html>

