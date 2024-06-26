<!DOCTYPE html>
<html lang="en">
<head>
    <title>BIOPRO VET CARE SYSTEMS</title>
    <style>
        body {
            background-image: url('image.jpg'); /* Change to 'image.png' to match your image file */
            background-size: cover;
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-position: center;
            font-family: Arial, sans-serif;
            margin: 0;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .button-container {
    position: absolute; /* Change to absolute positioning */
    top: 40%; /* Position from the top */
    left: 60%; /* Position from the left */
    transform: translate(-50%, -50%); /* Move the container 50% from the left and top */
    display: flex;
    flex-direction: column; /* Align buttons vertically */
    align-items: center; /* Center items horizontally */
    gap: 50px;
}


        .btn {
	    width: 100px;
	    Height: 80px;
            padding: 10px 20px;
            font-size: 40px;
            cursor: pointer;
            border: none;
            background-color: #FF69B4; /* Pink color */
            color: white;
            border-radius: 15px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .btn:hover {
            background-color: #FF1493; /* Darker pink color for hover effect */
            transform: translateY(-2px);
        }
    </style>
</head>
<body>
    <div style="height: 100%;"></div>
    <div class="button-container">
        <a href="details.php" class="btn">More</a>

        <a href="login.php" class="btn">Login</a>

    </div>
</body>
</html>
