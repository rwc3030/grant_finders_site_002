<?php
function getData($params) {
    if (empty($params['id'])) {
        return "Invalid request: ID is required.";
    }
    // Continue with data retrieval logic...
    return "Data retrieved successfully for ID: " . $params['id'];
}
