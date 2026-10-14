<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourism Login</title>
    <link rel="stylesheet" href="css/style.css">

    <style>
        body {
            background: #edf5f8;
            font-family: Arial, sans-serif;
        }

        .login-box {
            max-width: 380px;
            margin: 70px auto;
            padding: 30px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 5px 20px #0002;
        }

        .login-box h2 {
            text-align: center;
            color: #073b4c;
        }

        .login-box label {
            display: block;
            margin: 15px 0 6px;
        }

        .login-box input {
            width: 100%;
            box-sizing: border-box;
            padding: 12px;
            border: 1px solid #ccd6dd;
            border-radius: 6px;
        }

        .login-box button {
            width: 100%;
            margin-top: 22px;
            padding: 12px;
            background: #078c86;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>Tourism Login</h2>

        <form method="post" action="">
            <label for="username">Username</label>
            <input type="text" id="username" name="username"
                   placeholder="Enter username" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password"
                   placeholder="Enter password" required>

            <button type="submit">Login</button>
        </form>

        <p style="text-align:center;">
            <a href="index.php">Back to Home</a>
        </p>
    </div>
</body>
</html>