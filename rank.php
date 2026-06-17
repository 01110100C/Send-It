<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styles.css?v=<?= filemtime('styles.css') ?>" />
    <script src="script.js"></script>
    <meta charset="UTF-8" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
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
            <li><a href="logout.php">Log Out</a></li>

        </ul>
    </nav>
<br>
<br>
<br>

<h1> Climbing Rankings </h1>
<p>Climbers ranks are updated daily based on the average grade level they are sending and how many sends they have. </p>


<div class = "ranks"> 
    <h3> RANKS </h3>
    <p class="bedrock"> Bedrock </p>
    <p class="silver"> Silver </p> 
    <p class="granite"> Granite </p>
    <p class="quartz"> Quartz </p>
    <p class ="ruby"> Ruby </p>
    <p class= "diamond"> Diamond </p>
    <p class = "emerald"> Emerald </p>
</div> 

<div class = "rank-container"> 
    <table>
        <tr>
            <th> Rank </th>
            <th> User </th>
            <th> Total Sends </th>
            <th> Average Grade </th>
        </tr>
    <div class = "rank-display"> 
        <tr>
        <td></td>
        </tr>
    </div>

</div> 

</body>
</html>