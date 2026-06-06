<?php
session_start();
include("database.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!empty($username) && !empty($password)) {
        $stmt = mysqli_prepare($con, "SELECT * FROM users WHERE username = ?");
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);


            if (password_verify($password, $user_data['password'])) {

            
                $_SESSION['user_id'] = $user_data['user_id'];
                $_SESSION['username'] = $user_data['username'];

                header("Location: home.php");
                die;
            } else {
                echo "Incorrect username or password.";
            }
        } else {
            echo "Incorrect username or password.";
        }
    } else {
        echo "Please enter some valid information!";
    }
}
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