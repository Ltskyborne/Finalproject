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
    <p>I'm <b>Dominic</b> and I like to <b>swim</b>.</p>
    <p>I'm now in <b>Junior High School</b>, currently an <b>8th grader</b> at <b>Smpk Bpk Penabur</b>.</p>
    <p>I'm also an <b>F1 fan 🏎️</b>.</p>
    <a href="logout.php" class="logout-btn">Logout</a>
</div>
</body>
</html>
