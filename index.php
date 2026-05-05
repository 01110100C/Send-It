<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styles.css?v=<?= filemtime('styles.css') ?>" />
    <script src="script.js"></script>
    <meta charset="UTF-8" />
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
</body>