<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Portal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-top: 50px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .button-container {
            margin-bottom: 20px;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .button:hover {
            background-color: #0056b3;
        }
        .welcome-message {
            color: #666;
            margin-bottom: 20px;
        }
        .tailwebs-heading {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Welcome to the <span class="tailwebs-heading">tailwebs</span></h1>
    
    <div class="container">
        <p class="welcome-message">Start your journey with us! We provide a platform for teachers to manage students efficiently and effectively.</p>
        <div class="button-container">
            <a href="login.php" class="button">Login</a>
        </div>
        <div class="button-container">
            <a href="register.php" class="button">Register</a>
        </div>
        
    </div>
</body>
</html>
