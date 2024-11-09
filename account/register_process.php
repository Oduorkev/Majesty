<?php
session_start();
require_once 'config.php'; // Ensure this path is correct

// Get the submitted form data and sanitize it
$firstname = trim($_POST['firstname']);
$lastname = trim($_POST['lastname']);
$email = trim($_POST['email']);
$password = trim($_POST['password']);

// Check if the email is already registered
$sql = "SELECT id FROM users WHERE email = :email";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':email', $email, PDO::PARAM_STR);
$stmt->execute();

if ($stmt->fetch()) {
    $_SESSION['error'] = 'Email is already registered.';
    header('Location: register.php');
    exit;
}

// If the email check passes, proceed with registration
try {
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (firstname, lastname, email, password_hash) VALUES (:firstname, :lastname, :email, :password_hash)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':firstname', $firstname, PDO::PARAM_STR);
    $stmt->bindParam(':lastname', $lastname, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':password_hash', $passwordHash, PDO::PARAM_STR);

    if ($stmt->execute()) {
        $_SESSION['message'] = 'Registration successful! You can now log in.';
        header('Location: login.php');
        exit;
    } else {
        $_SESSION['error'] = 'Registration failed. Please try again.';
        header('Location: register.php');
        exit;
    }
} catch (PDOException $e) {
    $_SESSION['error'] = 'Database error: ' . $e->getMessage();
    header('Location: register.php');
    exit;
}
?>
