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
       <form action="" class = "login-form">
                    <label for="username">Username:</label>
                    <input type="text" placeholder="Enter a username" required />
                    <br>
                    <label for="password">Password:</label>
                    <input type="password" placeholder="Enter a password" required />
                    <br>
                    <input type="password" placeholder="Confirm password" required />
                    <div class="wrap">
                    <button type="submit">Log In</button>
                    </div>
                </form>
        
               <button type="button" class="buttons" onclick="location.href='index.php'">GO BACK</button>
    </main>
</body>
</html>

