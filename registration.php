<?php
session_start();
include("database.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!empty($username) && !empty($password)) {

        $user_id = random_num(18);

        //hash the password
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        // SQL Injection prevention using prepared statements
        $stmt = mysqli_prepare($con, "INSERT INTO users (user_id, username, password, date) VALUES (?, ?, ?, CURDATE())");
        mysqli_stmt_bind_param($stmt, "sss", $user_id, $username, $hashed_password);
        mysqli_stmt_execute($stmt);

        header("Location: home.php");
        die;

    } else {
        echo "Please enter some valid information!";
    }
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
    <title>Register Account</title>
</head>

<body>
    <main>
        <div class = "registration">
       <form method="post">
                <input type="text" name="username" placeholder="Username" required><br><br>
                <input type="password" name="password" placeholder="Password" required><br><br>

                <input type = "submit" value="sign up"> 
            </form> 
        
               <button type="button" class="buttons" onclick="location.href='index.php'">GO BACK</button>

</div>
    </main>
</body>
</html>

