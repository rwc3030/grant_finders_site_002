<?php
header("Content-Type: application/json");
include_once '../database.php';

$database = new Database();
$db = $database->getConnection();

$location = isset($_GET['location']) ? $_GET['location'] : die(json_encode(["message" => "Location not provided."]));

$query = "SELECT * FROM grant_finders_site_002_grants WHERE location LIKE :location";
$stmt = $db->prepare($query);
$location = "%{$location}%";
$stmt->bindParam(':location', $location);
$stmt->execute();

$grants = $stmt->fetchAll(PDO::FETCH_ASSOC);

if ($grants) {
    echo json_encode($grants);
} else {
    echo json_encode(["message" => "No grants found."]);
}
