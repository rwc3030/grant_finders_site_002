<?php
header('Content-Type: application/json');
include '../database.php';

function getFAQs($conn) {
    $sql = "SELECT * FROM grant_finders_site_002_faqs";
    $result = $conn->query($sql);
    $faqs = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $faqs[] = $row;
        }
    }
    return $faqs;
}

$faqs = getFAQs($conn);
echo json_encode($faqs);
?>
