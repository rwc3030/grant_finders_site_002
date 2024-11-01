<?php
// Database configuration
define('DB_HOST', 'localhost');
define('DB_NAME', 'grant_finders_site_002'); // Updated database name
define('DB_USER', 'root');
define('DB_PASS', 'snapper');
define('ERROR_LOG_FILE', __DIR__ . '/../logs/php_errors.log');
define('ERROR_REPORTING_LEVEL', E_ALL); // Set the error reporting level

// Error logging configuration
ini_set('log_errors', 1);
ini_set('error_log', ERROR_LOG_FILE);
error_reporting(ERROR_REPORTING_LEVEL); // Use the defined error reporting level
?>
