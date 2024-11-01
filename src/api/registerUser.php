<?php
require_once '../database.php';

function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

function isPasswordStrong($password) {
    return strlen($password) >= 8 && preg_match('/[A-Z]/', $password) && preg_match('/[0-9]/', $password);
}

function registerUser($email, $password) {
    if (!validateEmail($email)) {
        return "Invalid email format.";
    }
    
    if (!isPasswordStrong($password)) {
        return "Password must be at least 8 characters long and include at least one uppercase letter and one number.";
    }

    global $pdo; // Use the global PDO instance
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    
    $stmt = $pdo->prepare("INSERT INTO grant_finders_site_002_users (email, password) VALUES (:email, :password)");
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $hashedPassword);
    
    if ($stmt->execute()) {
        return "User registered successfully.";
    } else {
        return "Registration failed. Please try again.";
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $response = registerUser($email, $password);
    echo json_encode(['message' => $response]);
}
?>
