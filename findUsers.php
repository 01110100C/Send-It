<?php
session_start();

include("database.php");
include("functions.php");

if (isset($_GET['q'])) {
    header('Content-Type: application/json');

    $query = trim($_GET['q']);

    if (strlen($query) < 2) {
        echo json_encode([]);
        exit;
    }

    $searchTerm = '%' . $query . '%';

    $stmt = $pdo->prepare("
        SELECT id, username
        FROM users
        WHERE username LIKE :term 
        ORDER BY username ASC
        LIMIT 20
    ");
    $stmt->execute(['term' => $searchTerm]);

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($results);
    exit;
}
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
<title>Find Friends</title>
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
<br><br><br><br>

<h1> Look up friends by username </h1> 

<div class="findUsers">
<input type="text" id="userSearch" placeholder="Search users...">
<div class="displayUsers" id="results"></div>
</div> 

<script>
const input = document.getElementById('userSearch');
const results = document.getElementById('results');
let debounceTimer;

input.addEventListener('input', () => {
    clearTimeout(debounceTimer);
    const q = input.value.trim();
    if (q.length < 2) {
        results.innerHTML = '';
        return;
    }
    debounceTimer = setTimeout(() => {
        fetch('findUsers.php?q=' + encodeURIComponent(q))
            .then(res => res.json())
            .then(data => {
                results.innerHTML = data.map(u => `
                    <div class="user-result">
                        <a href="profile.php?id=${u.id}">${u.username}</a>
                    </div>
                `).join('');
            });
    }, 300); 
});
</script>
</body>
</html>