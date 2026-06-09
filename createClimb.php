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
    <title>Create Climb</title>
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

    <h1> Create a Climb </h1>

    <h4> Fill Out information below </h4> 

    <form method="post">
        
                <input type="text" name="Climb Title" placeholder="Title"><br><br>
                <input type="text" name="Climb Grade" placeholder="Grade"><br><br>
                <input type="text" name="Climb Info" placeholder="Extra Info"><br><br>
                <input type="text" name="Picture" placeholder="Picture"><br><br>
                <input type="text" name="Climb Location" placeholder="Location"><br><br>

                <input type = "submit" value="submit climb"> 
    </form> 