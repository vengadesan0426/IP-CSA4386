<!DOCTYPE html>
<html>
<head>
    <title>Submit Payment</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        input[type="text"],
        input[type="date"],
        input[type="submit"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Submit Payment</h1>
    <form action="submit_payment.php" method="post">
        <label for="user_id">User ID:</label>
        <input type="text" id="user_id" name="user_id">
        <label for="pet_name">Pet Name:</label>
        <input type="text" id="pet_name" name="pet_name">
        <label for="appointment_type">Appointment Type:</label>
        <input type="text" id="appointment_type" name="appointment_type">
        <label for="caretaker">Caretaker:</label>
        <input type="text" id="caretaker" name="caretaker">
        <label for="date_of_appointment">Date of Appointment:</label>
        <input type="date" id="date_of_appointment" name="date_of_appointment">
        <label for="fees">Fees:</label>
        <input type="text" id="fees" name="fees">
        <label for="payment_type">Payment Type:</label>
        <input type="text" id="payment_type" name="payment_type">
        <input type="submit" value="Submit">
    </form>
</body>
</html>
