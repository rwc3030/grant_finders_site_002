<?php
function validateInput($input) {
    return htmlspecialchars(strip_tags(trim($input)));
}

$email = validateInput($_POST['email']);
$password = validateInput($_POST['password']);
// Continue with login logic...
