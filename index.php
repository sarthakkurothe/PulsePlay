<!DOCTYPE html>
<html>
<head>
    <title>PulsePlay</title>
    <style>
        body {
            background-image: url("motherboard.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: 'Roboto', Arial, sans-serif;
        }
        
        .container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 5px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .btn {
            background-color: green;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 20px;
            font-weight: bold;
            font-family: 'Roboto', Arial, sans-serif;
        }
    </style>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
    <div class="container">
        <form method="post" action="login.php">
            <h2 style="margin-bottom: 20px;">WELCOME TO PULSEPLAY</h2>
            <div class="form-group">
                <label for="username">USERNAME : </label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">PASSWORD : </label>
                <input type="password" id="password" name="password" required>
            </div>
            <input type="submit" value="LOGIN" class="btn">
        </form>
    </div>
</body>
</html>
