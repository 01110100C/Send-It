<?php
session_start();
include("database.php");
include("functions.php");

$sql = "SELECT post.*, users.username
            FROM post 
            JOIN users ON post.user_id = users.user_id
            ORDER BY post.post_id DESC"; 

$result = mysqli_query($con, $sql); 

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
    <title>Home Page</title>
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

<!-- 
    Community Feed Display 

    show posts from users that the logged in user currently follows.
    Should pull from post table in the database. 

-->

    <h1> Community Feed </h1>
<div class="feed-container">
    <div class="feed">

        <?php if (mysqli_num_rows($result) > 0): ?>

            <?php while ($post = mysqli_fetch_assoc($result)): ?> 

                <div class="post">
                    <div class="post_header">
                        <h3><?= htmlspecialchars($post['username']) ?></h3>
                        <span><?= htmlspecialchars($post['climb_location']) ?></span>
                    </div>

                    <?php if (!empty($post['climb_picture'])): ?>
                        <div class="image">
                            <img src="<?= htmlspecialchars($post['climb_picture']) ?>" alt="Climb Photo">
                        </div>
                    <?php endif; ?>

                    <div class="post_main">
                        <h2><?= htmlspecialchars($post['climb_title']) ?></h2>
                        <p>GRADE: <?= htmlspecialchars($post['climb_grade']) ?></p>
                        <p><?= htmlspecialchars($post['climb_info']) ?></p>
                    </div>
                </div>

            <?php endwhile; ?> 

        <?php else: ?>
            <p>No climbs posted yet.</p>
        <?php endif; ?>

    </div>
</div>

<!-- 
Show people you follow that are also online 
 
include php functions to pull from the profile table to see who the uder follows. 
take the followers and display the ones currently active on the table. 

Add a find friends button to look up users to add. When a user is looked up and selected it should 
display that users profile. 
-->
<div class ="friends-online">
    <h2>Friends Online</h2>
    <ul>
        <li>Climber2</li>
        <li>Climber3</li>
        <li>Climber4</li>
    </ul>

<button type="button" class="buttons" onclick="location.href='findUsers.php'"> Find Friends </button> 
</div>

</div>
<br>
<br>
<div class = "create"> 
    <h3> click here to create a post </h3> 
        <br>
        <br>
        <button type="button" class="buttons" onclick="location.href='createClimb.php'">Create Post</button>
</div>




    <footer>
        <p>© 2026 Send It. All rights reserved.</p>
    </footer>
</body>
</html>