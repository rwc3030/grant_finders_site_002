<?php
require_once '../utils/validation.php';

function loginUser($email, $password) {
    if (!validateEmail($email)) {
        return "Invalid email format.";
    }

    // Simulate password verification logic
    $storedHashedPassword = '$2y$10$examplehashedpassword'; // Example hashed password
    if (password_verify($password, $storedHashedPassword)) {
        return "Login successful. Welcome back!";
    } else {
        return "Invalid credentials. Please try again.";
    }
}

// Example usage
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $message = loginUser($email, $password);
    echo $message;
}
