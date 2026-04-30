<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styles.css?v=<?= filemtime('style.css') ?>" />
    <script src="script.js"></script>
    <meta charset="UTF-8" />
    <title>Register Account</title>
</head>

<body>
    <main>
       <form action="">
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

