<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Log In Page </title>
    <link rel="stylesheet" href="styles.css?v=<?= filemtime('styles.css') ?>" />
    <script src="script.js"></script>
</head>
<body>
    <div class="main">
        <h1>Welcome Back</h1>
        <br>
        <h3>Please log in to your account</h3>
                <form action="">
                    <label for="username">Username:</label>
                    <input type="text" placeholder="Enter your username" required />
                    <br>
                    <label for="password">Password:</label>
                    <input type="password" placeholder="Enter your password" required />
                    <div class="wrap">
                    <button type="submit">Log In</button>
                    </div>
                </form>
            </div>

<button type="button" class="buttons" onclick="location.href='index.php'">GO BACK</button>
</div>
</body>
</html>