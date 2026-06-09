<?php
session_start();

    include("database.php");
    include("functions.php");

?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styles.css?v=<?= filemtime('styles.css') ?>" />
    <script src="script.js"></script>
    <meta charset="UTF-8" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <title>Find Friends</title>
</head>
<body>
    <nav id="navbar">
        <div class="logo"> SEND IT </div>
        <ul class="nav-links">
            <li><a href="home.php">Home</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="train.php">Training</a></li>
            <li><a href="rank.php">Ranked</a></li>
        </ul>
    </nav>
    <br>
    <br>
    <br>
    <br>

<h1> Look up friends by username </h1> 
<div class = "findUsers">
    <form method="post">
<input type="text" name="username" placeholder="Username" required>
<input type = "submit" value="Search"> 
<div class="displayUsers">
</form>
    <!-- Once the username is entered it should display that usernames profile within this div -->
</div>