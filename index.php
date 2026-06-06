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
    <title>Send It Main Page</title>
</head>
<body>
    <br>
     <img src="SenditLogo.png" alt="project logo" width="550" height = "400" style="border-radius: 15px;>">
        <div class="description" style="text-color: white; font-size: 20px;">
        <p> Welcome to Send It, your go-to platform for sharing and tracking climbs! </p>
        <p> To get started, please register for an account or log in if you already have one. </p>
        </div>
                 <div class="links">
                     <button type="button" class="buttons" onclick="location.href='login.php'">LOG IN</button>
                     <button type="button" class="buttons" onclick="location.href='registration.php'">REGISTER</button>

                </div>
  <footer>
        <p>© 2026 Send It. All rights reserved.</p>
    </footer>
</body>