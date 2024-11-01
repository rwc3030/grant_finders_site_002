<?php
function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

function validatePassword($password) {
    // Example password strength check: at least 8 characters, 1 uppercase, 1 number
    return preg_match('/^(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{8,}$/', $password);
}

function registerUser($email, $password) {
    if (!validateEmail($email)) {
        return "Invalid email format.";
    }
    
    if (!validatePassword($password)) {
        return "Password must be at least 8 characters long and include at least one uppercase letter and one number.";
    }

    // Simulate registration logic
    $registrationSuccess = true; // Assume registration is successful

    if ($registrationSuccess) {
        // Send confirmation email logic here
        return "Registration successful. A confirmation email has been sent.";
    } else {
        return "Registration failed. Please try again.";
    }
}

// Example usage
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $message = registerUser($email, $password);
    echo $message;
}
