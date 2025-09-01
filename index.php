<?php
session_start(); 
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // Redirect if not logged in
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        nav {
            background: #333;
            padding: 15px;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            padding: 10px 20px;
            background: #444;
            border-radius: 5px;
            transition: background 0.3s;
        }

        nav a:hover {
            background: #666;
        }

        section {
            padding: 50px;
            text-align: center;
        }
    </style>
</head>
<body>
    <!-- Navigation buttons -->
    <nav>
        <a href="index.php">Home</a>
        <a href="about.php">About Me</a>
        <a href="contact.php">Contact</a>
        <a href="logout.php">Logout</a>
    </nav>

    <!-- Home Section -->
    <section>
        <h1>Welcome to My Portfolio</h1>
        <p>Hello, <?php echo $_SESSION['username']; ?>! This is the home page of your portfolio.</p>
    </section>
</body>
</html>
