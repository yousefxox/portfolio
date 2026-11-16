const themeToggle = document.getElementById('theme-toggle');
if (themeToggle) {
    themeToggle.addEventListener('click', () => {
        document.body.classList.toggle('light-mode');
        themeToggle.textContent = document.body.classList.contains('light-mode') ? '☀️' : '🌙';
    });
}

function validateForm() {
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const emailPattern = /^[^@\s]+@[^@\s]+\.[^@\s]+$/;

    if (!name || !email) {
        alert("All fields are required!");
        return false;
    }
    if (!emailPattern.test(email)) {
        alert("Please enter a valid email address.");
        return false;
    }

    document.getElementById('profileMessage').innerText = `Thank you, ${name}!`;
    return false;
}

