<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout - BIOPRO VET CARE SHOP</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            background: linear-gradient(135deg, #74ebd5, #9face6);
            background-size: cover;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .content {
            background-color: rgba(255, 255, 255, 0.85);
            padding: 50px 20px;
            max-width: 600px;
            margin: auto;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
            backdrop-filter: blur(15px);
            text-align: center;
            margin-top: 100px;
        }
        .content h1 {
            color: #007BFF;
            font-size: 2.5em;
            margin-bottom: 20px;
        }
        .content p {
            font-size: 1.2em;
            margin-bottom: 30px;
        }
        .content button {
            padding: 12px 25px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-size: 1em;
            transition: background-color 0.3s, transform 0.3s;
        }
        .content button:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }
        .content a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 25px;
            transition: background-color 0.3s, transform 0.3s;
        }
        .content a:hover {
            background-color: #218838;
            transform: scale(1.05);
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 15px 20px;
            position: relative;
            bottom: 0;
            width: 100%;
            box-shadow: 0 -2px 4px rgba(0, 0, 0, 0.1);
            margin-top: auto;
        }
        footer p {
            margin: 0;
            font-size: 1em;
        }
    </style>
</head>
<body>

<div class="content">
    <h1>Logout</h1>
    <p>Are you sure you want to logout?</p>
    <button onclick="logout()">Logout</button>
    <p><a href="report_generation.php">GENERATE REPORT</a></p>
</div>

<footer>
    <p>&copy; 2024 BIOPRO VET CARE SHOP. All rights reserved.</p>
</footer>

<script>
    function logout() {
        // Clear any user session data (if any)
        // For example, clear localStorage, session storage, cookies, etc.
        // Here, we'll simply redirect to the homepage
        window.location.href = 'front.php';
    }
</script>

</body>
</html>
