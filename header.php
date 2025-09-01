<?php
// Start the session so we can check if the user is logged in
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Website Navigation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .navbar {
            background-color: #333;
            overflow: hidden;
        }
        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }
        .navbar a:hover {
            background-color: #575757;
        }
        .navbar-right {
            float: right;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <!-- Navigation buttons -->
        <a href="home.php">Home</a>
        <a href="about.php">About Me</a>
        <a href="contact.php">Contact</a>

        <div class="navbar-right">
            <?php if (isset($_SESSION['user_id'])): ?>
                <!-- If logged in, show logout -->
                <a href="logout.php">Logout</a>
            <?php else: ?>
                <!-- If not logged in, show login & signup -->
                <a href="login.php">Login</a>
                <a href="signup.php">Sign Up</a>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
