function displayResources(resources) {
    // Implementation for displaying resources
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

function handleSearch() {
    const searchInput = document.getElementById('search-input').value;
    if (!searchInput) {
        alert('Please enter a search term.');
        return;
    }
    // Perform search logic here
    // If no results found
    alert('No results found for your search.');
}

function submitQuestion() {
    const questionInput = document.getElementById('question-input').value;
    if (!questionInput) {
        alert('Please enter a question before submitting.');
        return;
    }
    // Submit question logic here
}

function registerUser() {
    const emailInput = document.getElementById('email-input').value;
    const passwordInput = document.getElementById('password-input').value;

    if (!emailInput || !passwordInput) {
        alert('Please fill in all fields.');
        return;
    }

    // Perform registration logic here
    // Example: Send data to the server
    fetch('/src/api/registerUser.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ email: emailInput, password: passwordInput })
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === 'success') {
            alert('Registration successful!');
        } else {
            alert(data.message);
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
}

document.getElementById('submit-question-btn').addEventListener('click', submitQuestion);
document.getElementById('register-btn').addEventListener('click', registerUser);
