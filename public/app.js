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
    }
}

async function fetchResources() {
    try {
        const response = await fetch('/api/getResources.php');
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
        const resources = await response.json();
        displayResources(resources);
    } catch (error) {
        console.error("Error fetching resources:", error);
    }
}

function displayResources(resources) {
    const resourcesContainer = document.getElementById("resourcesContainer");
    resourcesContainer.innerHTML = "";
    if (resources.length === 0) {
        resourcesContainer.innerHTML = "<p>No resources found.</p>";
        return;
    }

    resources.forEach(resource => {
        const resourceElement = document.createElement("div");
        resourceElement.className = "resource";
        resourceElement.innerHTML = `<h3>${resource.title}</h3><a href="${resource.url}" target="_blank">View Resource</a>`;
        resourcesContainer.appendChild(resourceElement);
    });
}

// Call fetchResources when the page loads
document.addEventListener("DOMContentLoaded", fetchResources);
