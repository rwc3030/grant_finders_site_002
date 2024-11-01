<?php

function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

function validatePassword($password) {
    // Example password strength check: at least 8 characters, 1 uppercase, 1 number
    return preg_match('/^(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{8,}$/', $password);
}

