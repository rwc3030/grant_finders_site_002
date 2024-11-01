<?php
function logError($error) {
    $logFile = 'error_log.txt';
    file_put_contents($logFile, date('Y-m-d H:i:s') . " - " . $error . PHP_EOL, FILE_APPEND);
}

try {
    // Your code that may throw an exception
} catch (Exception $e) {
    logError($e->getMessage());
    echo "An error occurred. Please try again later.";
}
