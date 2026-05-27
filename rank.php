<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styles.css?v=<?= filemtime('styles.css') ?>" />
    <script src="script.js"></script>
    <meta charset="UTF-8" />
    <title>Ranked</title>
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

<h1> Climbing Rankings </h1>
<p>Climbers ranks are updated daily based on the grade level they are sending and how many sends they have. </p>

<div class="layout"> 

    <div class="rank-tabs" id="rankTabs"></div>


    <div cladd="hero-card" id="heroCard"> 

    </div>

    <div class="stat-grid" id="statGrid">

    </div>

    <div class="progeress-row" id="progressRow">

    </div>

    <div class=section-title>Leaderboard</div>
    <table class="lb-table">
        <thead>
        <tr>
            <th>Rank</th>
            <th>Name</th>
            <th>Grade</th>
            <th>Sends</th>
        </tr>
       </thead>
         <tbody>


         </tbody>
    </table>

</div>

</body>
</html>