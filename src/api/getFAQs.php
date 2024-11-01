<?php
require_once '../utils/validation.php';

function anotherFunction() {
    // Example usage of validation functions
    $email = "test@example.com";
    $password = "Password1";

    if (!validateEmail($email)) {
        return "Invalid email format.";
    }

    if (!validatePassword($password)) {
        return "Password must be at least 8 characters long and include at least one uppercase letter and one number.";
    }

    // Continue with the rest of the function logic...
}
