function displayResources(resources) {
    const resourcesContainer = document.getElementById("resourcesContainer");
    resourcesContainer.innerHTML = "";
    if (resources.length === 0) {
        resourcesContainer.innerHTML = "<p>No resources found.</p>";
        return;
    }

    resources.forEach(resource => {
        const resourceElement = document.createElement("div");
        resourceElement.innerHTML = `
            <h3>${resource.title}</h3>
            <a href="${resource.url}" target="_blank">Download</a>
        `;
        resourcesContainer.appendChild(resourceElement);
    });
}

function fetchResources() {
    fetch('/api/getResources.php')
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => displayResources(data))
        .catch(error => {
            const resourcesContainer = document.getElementById("resourcesContainer");
            resourcesContainer.innerHTML = "<p>Error fetching resources: " + error.message + "</p>";
            console.error('Error fetching resources:', error);
        });
}

document.addEventListener('DOMContentLoaded', () => {
    fetchResources();
    const resourceCenterLink = document.createElement('a');
    resourceCenterLink.href = '/public/resource_center.php';
    resourceCenterLink.innerText = 'Resource Center';
    document.getElementById('mainMenu').appendChild(resourceCenterLink);
});
