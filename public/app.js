document.getElementById('login-form').addEventListener('submit', function(event) {
    event.preventDefault();

    const emailInput = document.getElementById('email-input').value;
    const passwordInput = document.getElementById('password-input').value;

    fetch('api/loginUser.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ email: emailInput, password: passwordInput })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert(data.message);
            window.location.href = 'dashboard.php'; // Redirect to dashboard
        } else {
            alert(data.message);
        }
    })
    .catch(error => console.error('Error:', error));
});
