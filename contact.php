<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    // Here, you would process and store the contact form data or send an email
    // For now, we'll just display a success message
    echo "Thank you, $name. We have received your message.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us - Electric Shop</title>
    <link rel="stylesheet" href="assets/index.css">
</head>
<body>
    <header>
        <h1>Contact Us</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="about.php">About</a></li>
            </ul>
        </nav>
    </header>
    <p>phone no: 0723744541
      <br>
      Email:majestyelectricals@gmail.com
      Address:Nakuru,Nairobi,Mombasa,Kisumu,Kisii,Migori,Siaya,Eldoret,Machakos,Kitui,Makueni,Kajiado and all parts of Kenya
</p>
      

    <main>
        <form action="contact.php" method="post">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>

            <label for="message">Message:</label>
            <textarea name="message" id="message" required></textarea>

            <button type="submit">Send Message</button>
        </form>
    </main>

    <footer>
    <div class="footer-container">
        <div class="footer-section about">
            <h3>About Us</h3>
            <p>
                Electric Shop is your one-stop solution for all your electrical needs. From home appliances to industrial equipment, we provide top-quality products and exceptional customer service.
            </p>
        </div>

        <div class="footer-section links">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="product.php">Products</a></li>
            </ul>
        </div>

        <div class="footer-section contact-info">
            <h3>Contact Information</h3>
            <p>
                <strong>Address:</strong> Nakuru City,Opposite Kplc<br>
                <strong>Phone:</strong> +254 723744541 or 0734370924<br>
                <strong>Email:</strong> majestyelectricals@gmail.com
            </p>
        </div>

        <div class="footer-bottom">
            
        </div>
    </div>


        <p>&copy; 2024 Majesty Electricals. All rights reserved.</p>
    </footer>
</body>
</html>
