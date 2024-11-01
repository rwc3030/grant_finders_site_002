<?php
require_once '../database.php';

function registerUser($email, $password) {
    global $pdo;

    // Hash the password for security
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Prepare SQL statement to insert new user
    $stmt = $pdo->prepare("INSERT INTO grant_finders_site_002_users (email, password) VALUES (:email, :password)");
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $hashedPassword);

    // Execute the statement and check for success
    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
}

// Check if the request is a POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    // Validate input
    if (filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($password)) {
        if (registerUser($email, $password)) {
            echo json_encode(['message' => 'User registered successfully.']);
        } else {
            echo json_encode(['message' => 'User registration failed.']);
        }
    } else {
        echo json_encode(['message' => 'Invalid input.']);
    }
} else {
    echo json_encode(['message' => 'Invalid request method.']);
}
