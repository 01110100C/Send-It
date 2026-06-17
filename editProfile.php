<?php
session_start(); 
include("database.php"); 
include("functions.php"); 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $highest_grade   = mysqli_real_escape_string($con, $_POST['highest_grade']);
    $bio   = mysqli_real_escape_string($con, $_POST['bio']);
    $location    = mysqli_real_escape_string($con, $_POST['location']);
    $year = mysqli_real_escape_string($con, $_POST['year']);
    $user_id        = $_SESSION['user_id'];
    $profile_picture  = "";

    if (isset($_FILES['profile_picture']) && $_FILES['profile_picture']['error'] === UPLOAD_ERR_OK) {

        $upload_dir    = 'uploads/';
        $allowed_types = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
        $file_type     = $_FILES['profile_picture']['type'];
        $file_size     = $_FILES['profile_picture']['size'];

        if (!in_array($file_type, $allowed_types)) {
            $error_message = "Only JPG, PNG, GIF, WEBP are allowed.";

        } elseif ($file_size > 5 * 1024 * 1024) {
            $error_message = "Image must be smaller than 5MB.";

        } else {
            $extension    = pathinfo($_FILES['profile_picture']['name'], PATHINFO_EXTENSION);
            $new_filename = uniqid('profile_', true) . '.' . $extension;
            $destination  = $upload_dir . $new_filename;

            if (move_uploaded_file($_FILES['profile_picture']['tmp_name'], $destination)) {
                
                $climb_picture = mysqli_real_escape_string($con, $destination);
            } else {
                $error_message = "Failed to save your uploaded image.";
            }
        }
    }

    if (empty($error_message)) {
        $sql = "INSERT INTO profile (user_id, profile_picture, bio, location, year, highest_grade)
                VALUES ('$user_id', '$profile_picture', '$bio', '$location', '$year', '$highest_grade')";

        
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