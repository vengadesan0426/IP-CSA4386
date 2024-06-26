<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback - BIOPRO VET CARE SHOP</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            background-size: cover;
        }
        header {
            background-color: rgba(0, 123, 255, 0.85);
            color: white;
            padding: 20px;
            text-align: center;
            position: relative;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        nav {
            position: absolute;
            top: 20px;
            right: 20px;
        }
        nav a {
            color: white;
            margin-left: 20px;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s;
        }
        nav a:hover {
            color: #FFD700;
        }
        .content {
            background-color: white;
            padding: 50px 20px;
            max-width: 900px;
            margin: 50px auto;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            backdrop-filter: blur(10px);
            text-align: center;
        }
        .content h1 {
            color: #007BFF;
        }
        .content form {
            margin-bottom: 30px;
        }
        .content input, .content textarea {
            width: calc(100% - 40px);
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .content button {
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .content button:hover {
            background-color: #0056b3;
        }
        .feedbacks {
            margin-top: 30px;
            text-align: left;
        }
        .feedback {
            background-color: #f9f9f9;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 4px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 20px;
            position: fixed;
            bottom: 0;
            width: 100%;
            box-shadow: 0 -2px 4px rgba(0, 0, 0, 0.1);
        }
        footer p {
            margin: 0;
        }
    </style>
</head>
<body>

<header>
    <h1>BIOPRO VET CARE SHOP</h1>
    <nav>
        <a href="indexs.php">Home</a>

        <a href="details.php">Contact</a>
        <a href="logout.php">Logout</a>
    </nav>
</header>

<div class="content">
    <h1>Customer Feedback</h1>
    <form id="feedbackForm">
        <input type="text" id="name" placeholder="Your Name" required>
        <textarea id="feedback" placeholder="Your Feedback" rows="4" required></textarea>
        <button type="submit">Submit</button>
    </form>
    <div class="feedbacks" id="feedbacks">
        <h2>Customer Feedbacks:</h2>
    </div>
</div>

<footer>
    <p>&copy; 2024 BIOPRO VET CARE SHOP. All rights reserved.</p>
</footer>

<script>
    document.getElementById('feedbackForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Get input values
        var name = document.getElementById('name').value;
        var feedback = document.getElementById('feedback').value;
        
        // Create new feedback div
        var feedbackDiv = document.createElement('div');
        feedbackDiv.classList.add('feedback');
        
        // Add content to feedback div
        feedbackDiv.innerHTML = '<p><strong>' + name + ':</strong></p><p>' + feedback + '</p>';
        
        // Append to feedbacks container
        document.getElementById('feedbacks').appendChild(feedbackDiv);
        
        // Clear the form
        document.getElementById('feedbackForm').reset();
    });
</script>

</body>
</html>
