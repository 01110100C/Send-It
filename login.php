<?php
session_start();

    include("database.php");
    include("functions.php");

    $user_data = check_login($con);

?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Log In Page </title>
    <link rel="stylesheet" href="styles.css?v=<?= filemtime('styles.css') ?>" />
    <script src="script.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
</head>
<body>
    <div class="main">
        <h1>Welcome Back</h1>
        <br>
        <h3>Please log in to your account</h3>

        <div class="login-form">
            <form method="post">
                <input type="text" name="username" placeholder="Username" required><br><br>
                <input type="password" name="password" placeholder="Password" required><br><br>

                <input type = "submit" value="login"> 
            </form> 
        </div>
    </div>

<button type="button" class="buttons" onclick="location.href='index.php'">GO BACK</button>
</div>
  <footer>
        <p>© 2026 Send It. All rights reserved.</p>
    </footer>
</body>
</html>