<?php
// Database connection and helper functions
$dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME;
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO($dsn, DB_USER, DB_PASS);
} catch (PDOException $e) {
    error_log("Database connection error: " . $e->getMessage());
    die("Database connection failed.");
}

function logQuery($query) {
    error_log("Executing query: " . $query);
}

function executeQuery($sql, $params = []) {
    global $pdo;
    logQuery($sql);
    $stmt = $pdo->prepare($sql);
    try {
        $stmt->execute($params);
    } catch (PDOException $e) {
        error_log("Query error: " . $e->getMessage());
        throw $e;
    }
    return $stmt;
}

function closeConnection() {
    global $pdo;
    $pdo = null; // Close the connection
}

function fetchAllGrants() {
    global $pdo;
    $sql = "SELECT * FROM grant_finders_site_002_grants";
    return executeQuery($sql)->fetchAll();
}
?>
