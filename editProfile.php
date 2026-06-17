<?php
session_start(); 
include("database.php"); 
include("functions.php"); 

$user_id = $_SESSION['user_id']; 

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $bio = trim($_POST['bio'] ?? 'No Bio Entered'); 
    $location = trim($_POST['location'] ?? 'Unknown'); 
    $year = trim($_POST['year'] ?? '0000'); 
    $highest_grade = trim($_POST['highest_grade'] ?? 'v0'); 

    $profile_pic_path = null; 

}

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
    <title>Edit Profile </title>
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
<div class = "profile-Form">
    <form method="post" enctype="multipart/form-data">

                <input type="text" name="bio" placeholder="bio"><br><br>
                <input type="text" name="location" placeholder="location"><br><br>
                <input type="text" name="year" placeholder="year"><br><br>
                <input type="text" name="highest_grade" placeholder="Highest Grade"><br><br>
                <label for="profile_picture"> Upload a photo (jpg, png, gif, webp - max 30mb):</label><br> 
                <input type="file" name = "profile_picture" accept="image/*"><br><br>

                <input type = "submit" value="submit info"> 
    </form> 
</div>