<?php
// Database credentials
$host = 'localhost';
$dbname = 'Majesty_db';
$user = 'root'; // replace with your database username
$password = ''; // replace with your database password

try {
    // Set up a PDO connection with error mode set to exceptions for better error handling
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    // Set some PDO options for performance and security
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); // Disable emulated prepared statements for true SQL safety
} catch (PDOException $e) {
    // Log error securely and display a generic message to the user
    error_log("Database connection error: " . $e->getMessage());
    die("An error occurred. Please try again later.");
}
