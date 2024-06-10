<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="output.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="logo.png" alt="Logo">
            <span class="logo-text">RussianCulture</span>
        </div>
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="review.php">Reviews</a></li>
                <li><a href="output.php">post something</a></li>
             
            </ul>
        </nav>
    </header>
    
    <section class="articles">
        <h2></h2>
        <button class="post-button" onclick="window.location.href='artikel.php'">Post somethin</button>
        <?php
        include 'koneksi.php';

        $query = "SELECT * FROM articles ORDER BY id DESC";
        $result = mysqli_query($conn, $query);
        
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "<div class='article'>";
                echo "<h3>" . htmlspecialchars($row['title']) . "</h3>";
                echo "<p>" . htmlspecialchars($row['content']) . "</p>";
                if (!empty($row['image'])) {
                    echo "<img src='uploads/" . htmlspecialchars($row['image']) . "' alt='Article Image'>";
                }
                echo "</div>";
            }
        } else {
            echo "<p>No articles found.</p>";
        }

        mysqli_close($conn);
        ?>
    </section>
</body>
</html>