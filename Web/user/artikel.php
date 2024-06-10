<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="artikels.css">
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

    <section class="upload-form">
        <h2>Upload Your Article</h2>
        <form action="upart.php" method="post" enctype="multipart/form-data">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>
            
            <label for="content">Content:</label>
            <textarea id="content" name="content" rows="10" required></textarea>
            
            <label for="image">Image:</label>
            <input type="file" id="image" name="image" accept="image/*" required>
            
            <button type="submit">Upload Article</button><a href="home.php"></a>
        </form>
    </section>
</body>
</html>