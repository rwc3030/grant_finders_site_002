document.addEventListener("DOMContentLoaded", function() {
    const searchButton = document.getElementById("searchButton");
    const resultsContainer = document.getElementById("resultsContainer");

    searchButton.addEventListener("click", function() {
        const query = document.getElementById("searchInput").value;

        if (!query) {
            alert("Please enter a search query.");
            return;
        }

        fetchGrants({ query });
    });

    async function fetchGrants({ query }) {
        try {
            const response = await fetch(`/api/getData.php?query=${encodeURIComponent(query)}`);
            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }
            const data = await response.json();
            displayResults(data);
        } catch (error) {
            console.error("Error fetching grants:", error);
            alert("An error occurred while fetching grants. Please try again later.");
            logError("AJAX call failed: " + error.message);
        }
    }

    function displayResults(data) {
        resultsContainer.innerHTML = "";
        if (data.length === 0) {
            resultsContainer.innerHTML = "<p>No grants found.</p>";
            return;
        }

        data.forEach(grant => {
            const grantElement = document.createElement("div");
            grantElement.className = "grant";
            grantElement.innerHTML = `<h3>${grant.title}</h3><p>${grant.description}</p>`;
            resultsContainer.appendChild(grantElement);
        });
    }

    function logError(message) {
        // Log error to the console and send to server
        console.error(message);
        fetch('/api/logError.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ error: message })
        });
    }
});
