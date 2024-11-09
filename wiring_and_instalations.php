<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Majesty Electricals</title>
    <link rel="stylesheet" href="assets/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="index.js"></script>
</head>
<body>

<header>
    <div class="header-section">
        <div class="brand">
            <a href="index.php"><img src="assets/img/logo.png" class="logo" alt="logo"></a>
            <a href="index.php" class="nav-brand">MAJESTY ELECTRICALS</a>
        </div>
        <nav>
            <ul class="nav">
                <li class="nav-item"><a href="index.php" class="nav-link active">Home</a></li>
                <li class="nav-item dropdown">
                    <a href="services.php" class="nav-link" id="servicesDropdown">
                        Services
                    </a>
                    <div class="dropdown-menu" id="servicesDropdownContent">
                        <a href="electrical_products.php" class="dropdown-item">Electrical Products</a>
                        <a href="outdoor_lighting.php" class="dropdown-item">Outdoor Lighting</a>
                        <a href="indoor_lighting.php" class="dropdown-item">Indoor Lighting</a>
                        <a href="" class="dropdown-item">Wiring and Installations</a>
                        <a href="solar_systems.php" class="dropdown-item">Solar Systems</a>
                        <a href="security_systems.php" class="dropdown-item">Security Systems</a>
                        <a href="heavy_machinery.php" class="dropdown-item">Heavy Machinery</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link" id="helpDropdown">
                        <i class="far fa-question-circle fa-lg"></i> Help
                    </a>
                    <div class="dropdown-menu" id="helpDropdownContent">
                        <a href="faq.php" class="dropdown-item">FAQ</a>
                        <a href="support.php" class="dropdown-item">Support</a>
                        <a href="contactus.php" class="dropdown-item">Contact Us</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a href="cart.php" class="nav-link">
                        <i class="fas fa-shopping-cart fa-lg"></i> Cart
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a href="account/myaccount.php" class="nav-link" id="accountDropdown">
                        <i class="fas fa-user fa-lg"></i> My Account
                    </a>
                    <div class="dropdown-menu" id="accountDropdownContent">
                        <a href="signin.php" class="dropdown-item signin-button">Sign In</a>
                        <a href="myaccount.php" class="dropdown-item">
                            <i class="fas fa-user-circle"></i> My Account
                        </a>
                        <a href="orders.php" class="dropdown-item">
                            <i class="fas fa-box"></i> Orders
                        </a>
                        <a href="saved-items.php" class="dropdown-item">
                            <i class="fas fa-heart"></i> Saved Items
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</header>

<div class="search-social-container">
    <div class="search-container">
        <form action="search.php" method="GET" class="search-form">
            <input type="text" name="query" placeholder="What are you looking for?" class="search-input" required>
            <button type="submit" class="search-button"><i class="fas fa-search"></i></button>
        </form>
    </div>

    <!-- Social Media Icons and Language Button -->
    <div class="social-media-container">
        <a href="https://www.facebook.com" target="_blank" class="social-icon">
            <i class="fab fa-facebook-f"></i>
        </a>
        <a href="https://www.tiktok.com" target="_blank" class="social-icon">
            <i class="fab fa-tiktok"></i>
        </a>
        <a href="https://twitter.com" target="_blank" class="social-icon">
            <i class="fab fa-twitter"></i>
        </a>
        <a href="https://www.instagram.com" target="_blank" class="social-icon">
            <i class="fab fa-instagram"></i>
        </a>
        <button class="language-button">English</button>
    </div>
</div>

<div class="product-cards-container">
    <div class="product-card">
        <img src="path-to-product-image-1.jpg" alt="Product 1" class="product-image">
        <h3 class="product-title">Product 1</h3>
        <p class="product-description">This is a brief description of Product 1 highlighting its features.</p>
        <p class="product-price">$29.99</p>
        <button class="like-button" onclick="toggleLike(this)">
            <i class="far fa-heart"></i>
        </button>
        <button class="add-to-cart">Add to Cart</button>
    </div>

    <div class="product-card">
        <img src="path-to-product-image-2.jpg" alt="Product 2" class="product-image">
        <h3 class="product-title">Product 2</h3>
        <p class="product-description">This is a brief description of Product 2 highlighting its features.</p>
        <p class="product-price">$39.99</p>
        <button class="like-button" onclick="toggleLike(this)">
            <i class="far fa-heart"></i>
        </button>
        <button class="add-to-cart">Add to Cart</button>
    </div>

    <div class="product-card">
        <img src="path-to-product-image-3.jpg" alt="Product 3" class="product-image">
        <h3 class="product-title">Product 3</h3>
        <p class="product-description">This is a brief description of Product 3 highlighting its features.</p>
        <p class="product-price">$49.99</p>
        <button class="like-button" onclick="toggleLike(this)">
            <i class="far fa-heart"></i>
        </button>
        <button class="add-to-cart">Add to Cart</button>
    </div>

    <!-- More product cards as needed -->

</div>

<footer>
    <div class="footer-container">
        <div class="footer-section about-us">
            <h3>About Us</h3>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="locations.php">Our Locations</a></li>
            </ul>
        </div>
        <div class="footer-section services">
            <h3>Services</h3>
            <ul>
                <li><a href="about.php">About Us</a></li>
                <li><a href="support.php">Support</a></li>
                <li><a href="warranty.php">Warranty Policy</a></li>
                <li><a href="delivery.php">Delivery</a></li>
                <li><a href="privacy.php">Privacy Policy</a></li>
                <li><a href="cookie.php">Cookie Policy</a></li>
                <li><a href="shipping.php">Shipping Policy</a></li>
            </ul>
        </div>
        <div class="footer-section support">
            <h3>Support</h3>
            <ul>
                <li><a href="search.php">Search</a></li>
                <li><a href="terms.php">Terms of Service</a></li>
                <li><a href="return.php">Return Policy</a></li>
            </ul>
        </div>
        <div class="footer-section newsletter">
            <h3>Newsletter</h3>
            <form action="subscribe.php" method="POST">
                <input type="email" placeholder="Your email address" required>
                <button type="submit">Subscribe</button>
            </form>
        </div>
        <div class="footer-section contact-details">
            <h3>Contact Details</h3>
            <p>
                <strong>Phone:</strong> +254 23744541 or 0734370924<br>
                <strong>Email:</strong> <a href="mailto:majestyelectricals@gmail.com">majestyelectricals@gmail.com</a>
            </p>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2024 Majesty Electricals. All rights reserved.</p>
    </div>
</footer>

</body>
</html>
