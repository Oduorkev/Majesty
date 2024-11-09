<?php
session_start();

// Include the PDO connection file
require_once 'config.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the submitted form data and sanitize it
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Check if the email and password are not empty
    if (empty($email) || empty($password)) {
        $_SESSION['error'] = 'Please fill in all fields.';
        header('Location: login.php'); // Redirect back to the login page with an error message
        exit();
    }

    try {
        // Prepare SQL query to find user by email
        $sql = "SELECT id, firstname, lastname, email, password_hash FROM users WHERE email = :email LIMIT 1";

        // Prepare the statement
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);

        // Execute the query
        $stmt->execute();

        // Check if a user is found
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            // Verify the password with the hashed password stored in the database
            if (password_verify($password, $user['password_hash'])) {
                // Password is correct, store the user's session data
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['firstname'] = $user['firstname'];
                $_SESSION['lastname'] = $user['lastname'];
                $_SESSION['email'] = $user['email'];

                // Regenerate session ID to prevent session fixation
                session_regenerate_id(true);

                // Redirect to the dashboard or user account page
                header('Location: index.php');
                exit();
            } else {
                // Incorrect password
                $_SESSION['error'] = 'Incorrect password.';
                header('Location: login.php');
                exit();
            }
        } else {
            // User not found
            $_SESSION['error'] = 'Email not found.';
            header('Location: login.php');
            exit();
        }
    } catch (PDOException $e) {
        // Handle database errors
        $_SESSION['error'] = 'Database error: ' . $e->getMessage();
        header('Location: login.php');
        exit();
    }
} else {
    // If the form is not submitted, redirect back to the login page
    header('Location: login.php');
    exit();
}
?>
