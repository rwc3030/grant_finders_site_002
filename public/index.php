<?php
function validateInput($input) {
    return htmlspecialchars(strip_tags(trim($input)));
}

$email = validateInput($_POST['email']);
$password = validateInput($_POST['password']);

if (empty($email) || empty($password)) {
    echo "Email and password are required.";
    exit;
}

// Continue with login logic...
