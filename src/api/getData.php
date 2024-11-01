<?php
header('Content-Type: application/json');

// Function to sanitize and validate input
function validateInput($input) {
    // Sanitize input
    $sanitizedInput = filter_var($input, FILTER_SANITIZE_STRING);
    
    // Validate input (example: check if not empty)
    if (empty($sanitizedInput)) {
        return [
            'status' => 'error',
            'message' => 'Invalid input: Input cannot be empty.',
            'data' => null
        ];
    }
    
    return [
        'status' => 'success',
        'data' => $sanitizedInput
    ];
}

// Main logic for fetching data
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $query = isset($_GET['query']) ? $_GET['query'] : '';

    // Validate the input
    $validationResult = validateInput($query);
    if ($validationResult['status'] === 'error') {
        echo json_encode($validationResult);
        exit;
    }

    // Proceed with fetching data from the database
    // Example: Fetch grants based on the sanitized query
    // Assuming a database connection is established
    $sanitizedQuery = $validationResult['data'];
    
    // Example SQL query (make sure to use prepared statements in real implementation)
    $sql = "SELECT * FROM grant_finders_site_002_grants WHERE title LIKE ?";
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['%' . $sanitizedQuery . '%']);
        $grants = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Return the response
        echo json_encode([
            'status' => 'success',
            'message' => 'Data fetched successfully.',
            'data' => $grants
        ]);
    } catch (PDOException $e) {
        echo json_encode([
            'status' => 'error',
            'message' => 'Database query error: ' . $e->getMessage(),
            'data' => null
        ]);
    }
} else {
    echo json_encode([
        'status' => 'error',
        'message' => 'Invalid request method.',
        'data' => null
    ]);
}
?>
