<?php
session_start();

    include("database.php");
    include("functions.php");

?>



<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styles.css?v=<?= filemtime('styles.css') ?>"/>
    <script src="script.js"></script>
    <meta charset="UTF-8" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
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

    <div class="profile-header">
    <!-- Placeholder for profile picture -->
            <div class="profile-picture">
                <!-- You can replace this with an actual image source -->
            </div>
    </div>

    <div class="username">
        <?php echo $_SESSION['username']; ?>
    </div>
    <div class="about"> Seattle, Washington | climbing since: 2018 </div>
     </div> 

   <div class="social-row">
        <div class="social-divider"></div>
        <div class="social-bar">
          <strong>48</strong> Following
        </div>
        <div class="social-divider"></div>
        <div class="social-bar">
          <strong>10</strong> Followers
        </div>
        <button class="follow-btn">+ Follow</button>
      </div>
    </div>
  </div>

  <br>
  <br>


  <!-- BIO -->
    <div class="bio-section">
        <div class="bio-header">Bio</div>
        <div class="bio-content">

        information about the user and their climbing history. 
        This can include their favorite climbing styles, notable achievements, and any other relevant information 
        that gives insight into their climbing journey.

        </div>
        </div>
    </div>

    <br>
    <br>
    <br>

<!-- User Climbs -->

<!-- User Stats --> 
 <div class="stats-section">
    
 <div class="stats-header">
    <span class="stats-title">Climbing Stats</span>
    <div class="section-line"></div>
</div>

<div class="stats-grid-top">
    <div class="stat-item">
        <span class="stat-label">Highest Grade:</span>
        <span class="stat-value"> V8 </span>
    </div>
    <div class="stat-item">
        <span class="stat-label">Total Climbs:</span>
        <span class="stat-value">150</span>
    </div>
    <div class="stat-item">
        <span class="stat-label"> Climbing Streak:</span>
        <span class="stat-value">30 days</span>
    </div>
</div>
</div>
  <footer>
        <p>© 2026 Send It. All rights reserved.</p>
    </footer>
</body>
</html>