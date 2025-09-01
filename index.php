<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dominic's Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="portfolio">
    <h1>Hello everyone 👋</h1>
    <h2>Hello! My name is Dominic Evander Daniel, and I am currently in the 8th grade. I enjoy spending my time swimming, as it helps me stay active and focused. I am also passionate about Formula 1, where I admire the combination of speed, strategy, and precision. These interests inspire me to stay dedicated, improve myself, and always aim for excellence both inside and outside of school.</h2>
    <p>Welcome to my portfolio website. Here you'll find information about my projects, skills, and experiences.</p>
    <h3>Projects</h3>
    <ul>

    <a href="logout.php" class="logout-btn">Logout</a>
</div>
</body>
</html>
