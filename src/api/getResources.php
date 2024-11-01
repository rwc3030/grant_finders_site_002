<?php
header('Content-Type: application/json');
include '../database.php';

function getResources() {
    global $conn;
    $sql = "SELECT * FROM grant_finders_site_002_resources";
    $result = $conn->query($sql);
    $resources = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $resources[] = $row;
        }
    }
    return $resources;
}

$resources = getResources();
echo json_encode($resources);
?>
