<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 1em 0;
            text-align: center;
        }

        header h1 {
            margin: 0;
            color: red;
            padding: 20px;
           
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
        }

        main {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .service {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .service img {
            max-width: 200px;
            border-radius: 8px;
        }

        .service-details {
            margin-left: 10px;
        }

        .service-details h3 {
            margin-top: 0;
            margin-bottom: 10px;
            color: #333;
        }

        .service-details p {
            margin: 0;
            color: #666;
        }

        .service-details button {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .service-details button:hover {
            background-color: #45a049;
        }

        #popup {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.8);
            color: #fff;
            padding: 20px;
            border-radius: 8px;
            display: none;
            z-index: 999;
        }

        #popup-message {
            display: block;
            margin-bottom: 10px;
        }

        #popup button {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        #popup button:hover {
            background-color: #45a049;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

        #schedule {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 500px;
            margin: 20px auto;
            display: none; /* Initially hidden */
        }

        .form-group {
            margin-bottom: 15px;
            width: 100%;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input, .form-group select {
            padding: 10px;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-group button {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .form-group button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <header>
        <h1>BIO PRO VETCARE SYSTEMS</h1>
        <h1>Our Services</h1>
        <nav>
            <ul>
                <li><a href="indexs.php">Home</a></li>
                <li><a href="payment.php">Payment</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="services">
            <div class="service" id="spa">
                <img src="petspa.jpg" alt="Spa">
                <div class="service-details">
                    <h3>Spa</h3>
                    <p>Relax your pet with our spa services including grooming, massage, and aromatherapy.</p>
                    <p>Amount: $50</p>
                    <button onclick="selectService('Spa', 50)">Select Spa Service</button>
                </div>
            </div>
            <div class="service" id="medication">
                <img src="mediaction.jpg" alt="Medication">
                <div class="service-details">
                    <h3>Medication</h3>
                    <p>Ensure your pet's health with our medication services including prescription and administration.</p>
                    <p>Amount: $30</p>
                    <button onclick="selectService('Medication', 30)">Select Medication Service</button>
                </div>
            </div>
            <div class="service" id="checkup">
                <img src="checkup.jpg" alt="General Check-up">
                <div class="service-details">
                    <h3>General Check-up</h3>
                    <p>Keep your pet healthy with regular check-ups including physical examination and vaccinations.</p>
                    <p>Amount: $20</p>
                    <button onclick="selectService('General Check-up', 20)">Select General Check-up</button>
                </div>
            </div>
        </section>

        <section id="schedule">
            <h2>Schedule an Appointment</h2>
            <form id="schedule-form" onsubmit="return handleSchedule(event)">
                <div class="form-group">
                    <label for="pet-name">Choose Your Pet:</label>
                    <select id="pet-name" name="pet-name" required>
                        <option value="Dog">Dog</option>
                        <option value="Cat">Cat</option>
                        <option value="Cow">Cow</option>
                        <option value="Bird">Bird</option>
                        <option value="Horse">Horse</option>
                        <option value="Goat">Goat</option>
                        <option value="Monkey">Monkey</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="service-type">Choose Appointment Type:</label>
                    <select id="service-type" name="service-type" required>
                        <option value="Spa">Spa</option>
                        <option value="Medication">Medication</option>
                        <option value="General Check-up">General Check-up</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="provider">Choose a Care-Taker:</label>
                    <select id="provider" name="provider" required>
                        <option value="Dr. Smith">Dr. Smith</option>
                        <option value="Dr. Jones">Dr. Jones</option>
                        <option value="Dr. Lee">Dr. Lee</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="date">Choose a Date:</label>
                    <input type="date" id="date" name="date" required>
                </div>
                <div class="form-group">
                    <label for="time">Choose a Time Slot:</label>
                    <select id="time" name="time" required>
                        <option value="09:00 AM">09:00 AM</option>
                        <option value="10:00 AM">10:00 AM</option>
                        <option value="11:00 AM">11:00 AM</option>
                        <option value="01:00 PM">01:00 PM</option>
                        <option value="02:00 PM">02:00 PM</option>
                        <option value="03:00 PM">03:00 PM</option>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit">Confirm Appointment</button>
                </div>
            </form>
        </section>
    </main>

    <div id="popup" class="popup" style="display: none;">
        <span id="popup-message"></span>
        <button onclick="redirectToPayment()">Proceed to Payment</button>
        <button onclick="closePopup()">Close</button>
    </div>

    <footer>
        <p>&copy; 2024 Veterinary Care System. All rights reserved.</p>
    </footer>

    <script>
        let selectedServices = [];
        let totalAmount = 0;

        function selectService(serviceType, amount) {
            selectedServices.push(serviceType);
            totalAmount += amount;
            document.getElementById('service-type').value = serviceType;
            document.getElementById('schedule').style.display = 'flex';
            window.scrollTo(0, document.getElementById('schedule').offsetTop);
        }

        function handleSchedule(event) {
            event.preventDefault();
            const petName = document.getElementById('pet-name').value;
            const serviceType = document.getElementById('service-type').value;
            const provider = document.getElementById('provider').value;
            const date = document.getElementById('date').value;
            const time = document.getElementById('time').value;

            const popupMessage = document.getElementById('popup-message');
            popupMessage.textContent = `Appointment confirmed for ${petName} (${serviceType} with ${provider}) on ${date} at ${time}. Total Amount: $${totalAmount}`;
            document.getElementById('popup').style.display = 'block';
            document.getElementById('schedule').style.display = 'none';
        }

        function closePopup() {
            document.getElementById('popup').style.display = 'none';
        }

        function redirectToPayment() {
            const params = new URLSearchParams();
            params.append('totalAmount', totalAmount);
            window.location.href = `payment.php?${params.toString()}`;
        }
    </script>
</body>
</html>
