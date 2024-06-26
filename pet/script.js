// Handle switching between login and registration views
function showRegistration(event) {
    event.preventDefault(); // Prevent default link behavior
    document.getElementById('login').style.display = 'none';
    document.getElementById('register').style.display = 'block';
}

function showLogin(event) {
    event.preventDefault(); // Prevent default link behavior
    document.getElementById('login').style.display = 'block';
    document.getElementById('register').style.display = 'none';
}

// Function to handle login
function handleLogin(event) {
    event.preventDefault();
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    // Check if username and password contain only alphanumeric characters
    const alphanumericRegex = /^[a-zA-Z0-9]+$/;
    if (!alphanumericRegex.test(username) || !alphanumericRegex.test(password)) {
        alert('Username and password must contain only alphanumeric characters.');
        return;
    }

    // Check if user exists and password matches
    const storedPassword = localStorage.getItem(username);
    if (storedPassword && storedPassword === password) {
        alert('Login successful!');
        window.location.href = 'index.html'; // Redirect to index.html
    } else {
        alert('Invalid username or password.');
    }
}

// Function to handle registration
function handleRegister(event) {
    event.preventDefault();
    const newUsername = document.getElementById('new-username').value;
    const newPassword = document.getElementById('new-password').value;

    // Check if username and password contain only alphanumeric characters
    const alphanumericRegex = /^[a-zA-Z0-9]+$/;
    if (!alphanumericRegex.test(newUsername) || !alphanumericRegex.test(newPassword)) {
        alert('Username and password must contain only alphanumeric characters.');
        return;
    }

    // Check if username already exists
    if (localStorage.getItem(newUsername)) {
        alert('Username already exists. Please choose a different username.');
    } else {
        // Store the username and password
        localStorage.setItem(newUsername, newPassword);
        alert('Registration successful! Please log in.');
        showLogin(event);
    }
}

let selectedService = '';
let selectedAmount = 0;

function selectService(service, amount) {
    selectedService = service;
    selectedAmount = amount;
    document.getElementById('services').style.display = 'none';
    document.getElementById('schedule').style.display = 'block';
}

function handleSchedule(event) {
    event.preventDefault();
    const date = document.getElementById('date').value;
    const time = document.getElementById('time').value;

    if (date && time) {
        const message = `You have selected ${selectedService} for $${selectedAmount} on ${date} at ${time}.`;
        document.getElementById('popup-message').innerText = message;
        document.getElementById('popup').style.display = 'block';
        document.getElementById('schedule').style.display = 'none';
    }
}

function closePopup() {
    document.getElementById('popup').style.display = 'none';
    document.getElementById('services').style.display = 'block';
    document.getElementById('schedule-form').reset();
}
