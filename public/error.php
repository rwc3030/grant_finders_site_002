<?php
function logError($error) {
    $logFile = 'error_log.txt';
    file_put_contents($logFile, date('Y-m-d H:i:s') . " - " . $error . PHP_EOL, FILE_APPEND);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['error'])) {
    logError($_POST['error']);
}

try {
    // Your code that may throw an exception
} catch (Exception $e) {
    logError($e->getMessage());
    echo "An error occurred. Please try again later.";
}
