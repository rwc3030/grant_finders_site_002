<?php
function registerUser($email, $password) {
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    // Store $hashedPassword in the database
}
