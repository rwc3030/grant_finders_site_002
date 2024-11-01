<?php include '../src/partials/header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grant Finder</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Welcome to the Ultimate Grant Resource Website</h1>
        <input type="text" id="searchInput" placeholder="Enter location to search for grants...">
        <button id="searchButton">Search</button>
        <div id="resultsContainer"></div>
        <h2>Register</h2>
        <input type="email" id="email-input" placeholder="Enter your email">
        <input type="password" id="password-input" placeholder="Enter your password">
        <button id="register-btn">Register</button>
    </div>
    <footer>
        <p>&copy; 2023 Ultimate Grant Resource Website. All rights reserved.</p>
    </footer>
    <script src="app.js"></script>
</body>
</html>
