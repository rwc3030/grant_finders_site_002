<?php
function connectToDatabase() {
    $host = 'localhost';
    $user = 'root';
    $password = 'snapper';
    $database = 'project_name_example_database';

    $connection = new mysqli($host, $user, $password, $database);
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }
    return $connection;
}
