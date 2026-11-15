<?php
include 'db_connect.php';
$sql = "SELECT * FROM projects";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yousef Fawaz | Photography Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="site-header">
        <div class="header-top">
            <span class="location-tag">Hail, Saudi Arabia</span>
            <span class="project-tag">Photography Portfolio</span>
            <span class="date-tag">2026</span>
        </div>
        <nav class="main-nav">
            <h1 class="logo">Yousef Fawaz</h1>
            <ul class="nav-links">
                <li><a href="#about">About</a></li>
                <li><a href="#gallery">Latest works</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
    </header>

    <section id="about" class="about-section">
        <div class="about-container">
            <div class="about-text">
                <p class="section-label">About</p>
                <p class="about-desc">
                    hellooo i'm yousef i'm photographer and these are my pics ;)
                </p>
            </div>
            <div class="about-image">
                <img src="images/photo1.jpg" alt="Yousef Portrait">
            </div>
        </div>
    </section>

    <section id="gallery" class="gallery-section">
        <div class="gallery-header">
            <span class="gallery-title-tag">Gallery</span>
            <h2> Works </h2>
        </div>
        
        <div class="gallery-grid">
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<div class="gallery-item">';
                    echo '<div class="image-wrapper">';
                    echo '<img src="'.$row["image_url"].'" alt="'.$row["title"].'">';
                    echo '</div>';
                    echo '<div class="item-info">';
                    echo '<h3>'.$row["title"].'</h3>';
                    echo '<span class="item-cat">'.$row["category"].'</span>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo "<p>No photos found.</p>";
            }
            ?>
        </div>
    </section>

    <section id="contact" class="contact-section">
        <div class="contact-box">
            <h2>Get in Touch</h2>
            <form name="profileForm" onsubmit="return validateForm()" action="process.php" method="post">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" id="name" name="name" placeholder="Your Name">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" id="email" name="email" placeholder="Your Email">
                </div>
                <button type="submit" class="submit-btn">Send Message ↗</button>
            </form>
            <div id="profileMessage" class="form-msg"></div>
        </div>
    </section>

    <footer class="site-footer">
        <p>&copy; 2026 Yousef Fawaz. All rights reserved.</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>