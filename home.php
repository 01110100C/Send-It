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
    <title>Home Page</title>
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
    <br>
    <br>
    

    <h1> Community Feed </h1>
<div class ="feed"> 
    <div class="post">
        <h2>Climber1 sent a V5!</h2>
        <p> Grade: V5 </p>
        <p> Location: The Spot </p>
        <p> Date: 01/01/2026 </p>
        <p> Comment: "This was a tough one, but I finally sent it!" </p>
    </div>
    <div class="post">
        <h2>Climber2 sent a V3!</h2>
        <p> Grade: V3 </p>
        <p> Location: The Cave </p>
        <p> Date: 01/02/2026 </p>
        <p> Comment: "Had a great day climbing with friends!" </p>
</div>

</div>


<div class ="friends-online">
    <h2>Friends Online</h2>
    <ul>
        <li>Climber2</li>
        <li>Climber3</li>
        <li>Climber4</li>
    </ul>
</div>





    <footer>
        <p>© 2026 Send It. All rights reserved.</p>
    </footer>
</body>
</html>