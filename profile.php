<?php
session_start();
 include("database.php");
 include("functions.php");

$user_id = $_SESSION['user_id']; 


// Gets users information that is currently logged in
$profile_sql = "SELECT u.username, p.bio, p.location, p.year, p.profile_picture, p.highest_grade
                FROM users u 
                LEFT JOIN profile p ON u.user_id = p.user_id
                WHERE u.user_id = ?"; 

$stmt = mysqli_prepare($con, $profile_sql); 
mysqli_stmt_bind_param($stmt, "i", $user_id); 
mysqli_stmt_execute($stmt); 
$profile_result = mysqli_stmt_get_result($stmt); 
$profile = mysqli_fetch_assoc($profile_result); 


// Get the users posts
$sql = "SELECT post.*, users.username
            FROM post 
            JOIN users ON post.user_id = users.user_id
            WHERE post.user_id = ?;
            ORDER BY post.post_id DESC"; 

$stmt2 = mysqli_prepare($con, $sql); 
mysqli_stmt_bind_param($stnt2, "i", $user_id); 
mysqli_stmt_execute($stmt2); 

$result = mysqli_stmt_get_result($stmnt2); 


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
            <li><a href="logout.php">Log Out</a></li>

        </ul>
    </nav>

    <br>
    <br>
    <br>
    <br>
    <br>

    <!-- User Specific Profile Picture -->
    <div class="profile-header">
            <div class="profile-picture">
                <?php if ($profile_pic && file_exists($profile_pic)): ?>
                    <img src="<?= htmlspecialchars($profile_pic) ?>" alt="Profile Picture" style="width:200px; height: 200px;"> 
            
                <?php else: ?>
                    <!-- Default Profile Picture -->
                    <img src="photos/SenditLogo.png" style="width: 200px; height: 200px;">
                <?php endif; ?>
                
        
            </div>
    </div>

 <!-- Pull user name from current session -->
    <div class="username">
        <?php echo $_SESSION['username'] ?? 'Guest'; ?>
    </div>

    <div class="about"> 
    <!-- Obtain about information for logged in user. Defaults set if user has not put in own info -->

        <?php 
        $about_parts = []; 
        if (!empty($profile['locaction'])) $about_parts[] = htmlspecialchars($profile['location']); 
        if(!empty($profile['year'])) $about_parts[] = 'Climbing Since: ' . htmlspecialchars($profile['year']); 
        echo !empty($about_parts) ? implode(' || ', $about_parts) : 'No location yet'; 
        ?>
        
<br>
    </div>
    <button class="edit-button" onclick="openEdit()"> Edit Profile </button>
    </div> 

   <div class="social-row">
        <div class="social-divider"></div>
        <div class="social-bar">
          <strong>0</strong> Following
        </div>
        <div class="social-divider"></div>
        <div class="social-bar">
          <strong>0</strong> Followers
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
                <?= !empty($profile['bio']) ? htmlspecialchars($profile['bio']) : 'no bio yet' ?>
        </div>
        </div>
    </div>

<!-- User Climbs -->
<div class = "climbs"> 
    <h2> Recent Climbs </h2>
    <div class = "post">
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

<!-- User Stats --> 
 <div class="stats-section">
    
 <div class="stats-header">
    <span class="stats-title">Climbing Stats</span>
    <div class="section-line"></div>
</div>

<div class="stats-grid-top">
    <div class="stat-item">
        <span class="stat-label">Highest Grade:</span>
        <span class="stat-value"> <?= $highest_climb ?> </span>
    </div>
    <div class="stat-item">
        <span class="stat-label">Total Climbs:</span>
        <span class="stat-value">2 </span>
    </div>
    <div class="stat-item">
        <span class="stat-label"> Climbing Streak:</span>
        <span class="stat-value">2 days</span>
    </div>
</div>
</div>
  <footer>
        <p>© 2026 Send It. All rights reserved.</p>
    </footer>
</body>
</html>