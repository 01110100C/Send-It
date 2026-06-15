<?php
session_start();
include("database.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $climb_title    = mysqli_real_escape_string($con, $_POST['climb_title']);
    $climb_grade    = mysqli_real_escape_string($con, $_POST['climb_grade']);
    $climb_info     = mysqli_real_escape_string($con, $_POST['climb_info']);
    $climb_location = mysqli_real_escape_string($con, $_POST['climb_location']);
    $user_id        = $_SESSION['user_id'];
    $climb_picture  = "";

    if (isset($_FILES['climb_picture']) && $_FILES['climb_picture']['error'] === UPLOAD_ERR_OK) {

        $upload_dir    = 'uploads/';
        $allowed_types = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
        $file_type     = $_FILES['climb_picture']['type'];
        $file_size     = $_FILES['climb_picture']['size'];

        if (!in_array($file_type, $allowed_types)) {
            $error_message = "Only JPG, PNG, GIF, WEBP are allowed.";

        } elseif ($file_size > 5 * 1024 * 1024) {
            $error_message = "Image must be smaller than 5MB.";

        } else {
            $extension    = pathinfo($_FILES['climb_picture']['name'], PATHINFO_EXTENSION);
            $new_filename = uniqid('climb_', true) . '.' . $extension;
            $destination  = $upload_dir . $new_filename;

            if (move_uploaded_file($_FILES['climb_picture']['tmp_name'], $destination)) {
                
                $climb_picture = mysqli_real_escape_string($con, $destination);
            } else {
                $error_message = "Failed to save your uploaded image.";
            }
        }
    }

    if (empty($error_message)) {
        $sql = "INSERT INTO post (user_id, climb_title, climb_grade, climb_info, climb_location, climb_picture)
                VALUES ('$user_id', '$climb_title', '$climb_grade', '$climb_info', '$climb_location', '$climb_picture')";

        
        if (mysqli_query($con, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . mysqli_error($con);
        }
    }

    mysqli_close($con);
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
<br>
<br>
<br>
<br>
    <h1> Create a Climb </h1>

    <h4> Fill Out information below </h4> 

<div class = "Climb-Form">
    <form method="post" enctype="multipart/form-data">

                <input type="text" name="climb_title" placeholder="Title"><br><br>
                <input type="text" name="climb_grade" placeholder="Grade"><br><br>
                <input type="text" name="climb_info" placeholder="Extra Info"><br><br>
                <input type="text" name="climb_location" placeholder="Location"><br><br>
                <label for="climb_picture"> Upload a photo (jpg, png, gif, webp - max 5mb):</label><br> 
                <input type="file" name = "climb_picture" accept="image/*"><br><br>

                <input type = "submit" value="submit climb"> 
    </form> 
</div>