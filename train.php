<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styles.css?v=<?= filemtime('styles.css') ?>" />
    <script src="script.js"></script>
    <meta charset="UTF-8" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <title>Training</title>
</head>
<body>
     <nav id="navbar">
        <div class="logo"> SEND IT </div>
        <ul class="nav-links">
            <li><a href="home.php">Home</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="train.php">Training</a></li>
            <li><a href="rank.php">Ranked</a></li>
            <li><a href="logout.php">Log Out</a></li>
        </ul>
    </nav>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div>
        <h1 style="text-align: center;">Training Hub</h1>
        <p>Welcome to the training hub! Create your own personalized training plan here or view helpful articles below. </p>
    </div>  


<script
	type="module"
	src="https://gradio.s3-us-west-2.amazonaws.com/6.18.0/gradio.js"
></script>

<gradio-app src="https://taylerc-rock-climbing-chat-bot.hf.space"></gradio-app>
      <footer>
        <p>© 2026 Send It. All rights reserved.</p>
    </footer>
</body>
</html>