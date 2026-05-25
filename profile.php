<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styles.css?v=<?= filemtime('styles.css') ?>"/>
    <script src="script.js"></script>
    <meta charset="UTF-8" />
    <title>Profile</title>
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

    <div class="profile-container">
        <h1>Your Profile</h1>
        <div class="profile-info">
            <p><strong>Username:</strong> </p>
            <p><strong>Bio:</strong> </p>
            <p><strong>Climbing Rank:</strong> </p>
            <p><strong>Date Joined:</strong> </p>
        </div>

        <div class="profile-actions">
            <button class="profile-button">Edit Profile</button>
            <button class="profile-button">View Post History</button>
            <button class="profile-button">View Ranked History</button>
            <button class="profile-button">Logout</button>
        </div>

        <div class="profile-stats">
            <h2>Climbing Stats</h2>
            <p><strong>Total Climbs:</strong> </p>
            <p><strong>Highest Grade:</strong> </p>
            <p><strong>Average Grade:</strong> </p>
            <p><strong>Favorite Climb:</strong> </p>
</div>
    </div>
</body>
</html>