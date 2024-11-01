<?php
// Database configuration
define('DB_HOST', 'localhost');
define('DB_NAME', 'project_name_example_database');
define('DB_USER', 'root');
define('DB_PASS', 'snapper');

// Error logging configuration
ini_set('log_errors', 1);
ini_set('error_log', __DIR__ . '/../logs/php_errors.log');
error_reporting(E_ALL);
?>
