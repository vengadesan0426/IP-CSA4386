<!DOCTYPE html>
<html lang="en">
<head>
<title>Payment - Veterinary Care System</title>
<style>
body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f9f9f9;
    }

    header {
        background-color: #4CAF50;
        color: white;
        padding: 1em 0;
        text-align: center;
      
    }

    nav ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333;
        text-align: center;
    }

    nav ul li {
        float: left;
    }

    nav ul li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    nav ul li a:hover {
        background-color: #111;
    }

    main {
        margin: 20px;
    }

    h1, h2 {
        color: #333;
    }

    form {
        background-color: white;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        max-width: 500px;
        margin: 0 auto;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        display: block;
        margin-bottom: 5px;
    }

    .form-group input, 
    .form-group select {
        width: 100%;
        padding: 8px;
        box-sizing: border-box;
    }

    button {
        background-color: #4CAF50;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    button:hover {
        background-color: #45a049;
    }

    footer {
        background-color: #333;
        color: white;
        text-align: center;
        padding: 10px 0;
        position:relative;
        width: 100%;
        bottom: 0;
        
    }

    #success {
        text-align: center;
        padding: 20px;
        background-color: #e7f5e1;
        border: 1px solid #b2d8b6;
        border-radius: 5px;
        max-width: 500px;
        margin: 20px auto;
    }

    #success h2 {
        color: #4CAF50;
    }
</style>
</head>
<body>
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
        gap: 50px;
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
       

<header>
    <h1>Payment</h1>
    <nav>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="services.html">Services</a></li>
            <li><a href="payment.php">Payment</a></li>
        </ul>
    </nav>
</header>

<main>
    <section id="payment">
        <h2>Payment Processing</h2>
        <p>Total Amount: <span id="totalAmount">$0</span></p>
        <p>Please enter your payment details:</p>
        <form action="submit_payment.php" method="post">
            <div class="form-group">
                <label for="user_id">User ID:</label>
                <input type="text" id="user_id" name="user_id" required>
            </div>
            <div class="form-group">
                <label for="pet_name">Pet Name:</label>
                <input type="text" id="pet_name" name="pet_name" required>
            </div>
            <div class="form-group">
                <label for="appointment_type">Appointment Type:</label>
                <input type="text" id="appointment_type" name="appointment_type" required>
            </div>
            <div class="form-group">
                <label for="caretaker">Caretaker:</label>
                
                <input type="text" id="caretaker" name="caretaker" required>
            </div>
            <div class="form-group">
                <label for="date_of_appointment">Date of Appointment:</label>
                <input type="date" id="date_of_appointment" name="date_of_appointment" required>
            </div>
            <div class="form-group">
                <label for="fees">Fees:</label>
                <input type="text" id="fees" name="fees" required>
            </div>
            <div class="form-group">
                <label for="paymentMethod">Payment Method:</label>
                <select id="paymentMethod" name="payment_type" required>
                    <option value="Credit Card">Credit Card</option>
                    <option value="Debit Card">Debit Card</option>
                    <option value="Cash">Cash</option>
                    <option value="Cheque">Cheque</option>
                    <option value="UPI">UPI</option>
                </select>
            </div>
            <div id="cardDetails" class="form-group" style="display: none;">
                <div>
                    <label for="cardNumber">Card Number:</label>
                    <input type="text" id="cardNumber" name="cardNumber" >
                </div>
                <div>
                    <label for="expiryDate">Expiry Date:</label>
                    <input type="text" id="expiryDate" name="expiryDate" >
                </div>
                <div>
                    <label for="cvv">CVV:</label>
                    <input type="text" id="cvv" name="cvv" >
                </div>
            </div>
            <div id="upidetails" class="form-group" style="display: none;">
                <div>
                    <label for="UPI">UPI SCANNER</label>
                </div>
                <div>
                    <img src="upi.jpg" width="200" height="200" alt="UPI Scanner">
                </div>
            </div>
            <button type="submit">Submit Payment</button>
        </form>
    </section>

    <section id="success" style="display: none;">
        <h2>Thank you for your payment!</h2>
        <p>Your payment has been processed successfully.</p>
        <p><a href="indexs.php">Return to Home</a></p>
    </section>
</main>

<footer>
    <p>&copy; 2024 Veterinary Care System. All rights reserved.</p>
</footer>

<script>
    window.onload = function() {
        const params = new URLSearchParams(window.location.search);
        const totalAmount = params.get('totalAmount');
        if (totalAmount) {
            document.getElementById('totalAmount').textContent = '$' + totalAmount;
        }

        const paymentMethod = document.getElementById('paymentMethod');
        const cardDetails = document.getElementById('cardDetails');
        const upiDetails = document.getElementById('upidetails');

        paymentMethod.addEventListener('change', function() {
            if (this.value === 'Credit Card' || this.value === 'Debit Card') {
                cardDetails.style.display = 'block';
            } else {
                cardDetails.style.display = 'none';
            }
            if (this.value === 'UPI') {
                upiDetails.style.display = 'block';
            } else {
                upiDetails.style.display = 'none';
            }
        });

        document.getElementById('paymentForm').addEventListener('submit', function(event) {
            event.preventDefault();
            document.getElementById('payment').style.display = 'none';
            document.getElementById('success').style.display = 'block';
        });
    };
</script>
</body>
</html>