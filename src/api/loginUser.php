<?php
function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

function validatePassword($password) {
    // Example password strength check: at least 8 characters, 1 uppercase, 1 number
    return preg_match('/^(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{8,}$/', $password);
}

function loginUser($email, $password) {
    if (!validateEmail($email)) {
        return "Invalid email format.";
    }
    
    if (!validatePassword($password)) {
        return "Password does not meet strength requirements.";
    }

    // Simulate database connection and user verification
    $conn = new mysqli('localhost', 'root', 'snapper', 'grant_finders_site_002');

    // Check connection
    if ($conn->connect_error) {
        return "Database connection failed: " . $conn->connect_error;
    }

    // Prepare and bind
    $stmt = $conn->prepare("SELECT * FROM grant_finders_site_002_users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 0) {
        return "No user found with this email.";
    }

    $user = $result->fetch_assoc();
    if (password_verify($password, $user['password'])) {
        return "Login successful!";
    } else {
        return "Incorrect password.";
    }

    $stmt->close();
    $conn->close();
}

// Example usage
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    echo loginUser($email, $password);
}
