<?php
// Database connection (update with your credentials)
$servername = "localhost";
$username = "root"; // your db username
$password = ""; // your db password
$dbname = "ElectricalShopDB"; // your db name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch products
$sql = "SELECT ProductID, ProductName, UnitPrice, Description FROM Products";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Products - Electric Shop</title>
    <link rel="stylesheet" href="assets/index.css">
</head>
<body>
    <header>
        <h1>Our Products</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="about.php">About</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="products">
            <h2>Available Products</h2>
            <div class="product-list">
                <?php
                if ($result->num_rows > 0) {
                    // Output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<div class='product'>";
                        echo "<h3>" . $row['ProductName'] . "</h3>";
                        echo "<p>" . $row['Description'] . "</p>";
                        echo "<p>Price: $" . number_format($row['UnitPrice'], 2) . "</p>";
                        echo "<button onclick=\"addToCart('" . $row['ProductName'] . "')\">Add to Cart</button>";
                        echo "</div>";
                    }
                } else {
                    echo "<p>No products found.</p>";
                }
                $conn->close();
                ?>
            </div>
        </section>
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

    <script src="script.js"></script>
</body>
</html>
