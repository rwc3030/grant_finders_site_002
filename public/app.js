function displayResources(resources) {
    // Existing code to display resources
}

function displayFAQs(faqs) {
    const faqContainer = document.getElementById('faq-container');
    faqContainer.innerHTML = '';
    faqs.forEach(faq => {
        const faqElement = document.createElement('div');
        faqElement.classList.add('faq');
        faqElement.innerHTML = `<h3>${faq.question}</h3><p>${faq.answer}</p>`;
        faqContainer.appendChild(faqElement);
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
            console.error('There was a problem with the fetch operation:', error);
        });
}

function fetchFAQs() {
    fetch('/api/getFAQs.php')
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => displayFAQs(data))
        .catch(error => {
            console.error('There was a problem with the fetch operation:', error);
        });
}

// Call fetchFAQs to load FAQs on page load
document.addEventListener('DOMContentLoaded', fetchFAQs);
