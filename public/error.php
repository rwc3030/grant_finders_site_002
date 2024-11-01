<?php
// Simple error handling page
$error_message = isset($_GET['error']) ? htmlspecialchars($_GET['error']) : 'An unexpected error occurred. Please try again later.';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Error</h1>
    <p><?php echo $error_message; ?></p>
    <a href="/">Go back to the homepage</a>
</body>
</html>
