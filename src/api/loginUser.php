<?php
require_once '../database.php';

function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

function loginUser($email, $password) {
    global $pdo;

    if (!validateEmail($email)) {
        return json_encode(["error" => "Invalid email format."]);
    }

    $stmt = $pdo->prepare("SELECT * FROM grant_finders_site_002_users WHERE email = :email");
    $stmt->execute(['email' => $email]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        // Successful login
        return json_encode(["success" => "Login successful.", "user_id" => $user['user_id']]);
    } else {
        return json_encode(["error" => "Incorrect email or password."]);
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents("php://input"), true);
    $email = $data['email'] ?? '';
    $password = $data['password'] ?? '';
    echo loginUser($email, $password);
}
