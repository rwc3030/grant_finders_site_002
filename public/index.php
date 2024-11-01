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
        <h1>Welcome to the Grant Finder</h1>
        <input type="text" id="searchInput" placeholder="Enter location to search for grants...">
        <button id="searchButton">Search</button>
        <div id="resultsContainer"></div>
    </div>
    <script src="app.js"></script>
</body>
</html>
