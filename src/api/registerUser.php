<?php
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

    // Simulate registration logic
    $registrationSuccess = true; // Assume registration is successful

    if ($registrationSuccess) {
        // Simulate sending confirmation email
        $emailSent = true; // Assume email is sent successfully
        if (!$emailSent) {
            return "Registration successful, but confirmation email could not be sent.";
        }
        return "Registration successful. A confirmation email has been sent.";
    } else {
        return "Registration failed. Please try again.";
    }
}

// Example usage
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    echo registerUser($email, $password);
}
