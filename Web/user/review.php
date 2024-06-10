<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Page</title>
    <link rel="stylesheet" href="stylereview.css">
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
    
    <section class="review-form">
        <h2>Submit Your Review</h2>
        <form action="simpanreview.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="review">Review:</label>
            <textarea id="review" name="review" rows="4" required></textarea>
            
            <button type="submit">Submit Review</button>
        </form>
    </section>

    <section class="reviews">
        <h2>Reviews</h2>
        <?php
        include 'koneksi.php';
        $query = "SELECT * FROM reviews ORDER BY id DESC";
        $result = mysqli_query($conn, $query);
        
        while($row = mysqli_fetch_assoc($result)) {
            echo "<div class='review'>";
            echo "<h3>" . htmlspecialchars($row['name']) . "</h3>";
            echo "<p>" . htmlspecialchars($row['review']) . "</p>";
            echo "</div>";
        }
        ?>
    </section>
</body>
</html>
