<?php
function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

function isPasswordStrong($password) {
    return strlen($password) >= 8 && preg_match('/[A-Z]/', $password) && preg_match('/[0-9]/', $password);
}

function loginUser($email, $password) {
    if (!validateEmail($email)) {
        return "Invalid email format.";
    }

    // Simulate password strength check
    if (!isPasswordStrong($password)) {
        return "Password must be at least 8 characters long and include at least one uppercase letter and one number.";
    }

    // Simulate database connection and user validation
    $conn = new mysqli('localhost', 'root', 'snapper', 'grant_finders_site_002');

    if ($conn->connect_error) {
        return "Database connection failed: " . $conn->connect_error;
    }

    // Sanitize user input to prevent SQL injection
    $email = $conn->real_escape_string($email);
    $password = $conn->real_escape_string($password);

    // Simulate user authentication
    $query = "SELECT * FROM grant_finders_site_002_users WHERE email='$email' AND password='$password'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        return "Login successful!";
    } else {
        return "Invalid email or password.";
    }
}
?>
