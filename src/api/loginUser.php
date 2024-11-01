<?php
require_once '../database.php';

function validateLogin($email, $password) {
    global $pdo;

    $stmt = $pdo->prepare("SELECT * FROM grant_finders_site_002_users WHERE email = :email");
    $stmt->execute(['email' => $email]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        return $user;
    }
    return false;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    $email = $data['email'];
    $password = $data['password'];

    $user = validateLogin($email, $password);
    if ($user) {
        // Start session and set user data
        session_start();
        $_SESSION['user_id'] = $user['user_id'];
        echo json_encode(['success' => true, 'message' => 'Login successful.']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Invalid credentials.']);
    }
}
