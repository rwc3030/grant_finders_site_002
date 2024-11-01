<?php
// Database configuration
define('DB_HOST', 'localhost');
define('DB_NAME', 'project_name_example_database');
define('DB_USER', 'root');
define('DB_PASS', 'snapper');
define('ERROR_LOG_FILE', __DIR__ . '/../logs/php_errors.log');

// Error logging configuration
ini_set('log_errors', 1);
ini_set('error_log', ERROR_LOG_FILE);
error_reporting(E_ALL);
?>
