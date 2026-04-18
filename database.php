<?php 

// Configuring the Database 
define('DB_HOST', 'localhost');
define('DB_NAME', 'send_it');
define('DB_USER', 'root@localhost');
define('DB_PASSWORD', 'root');

// Creating a connection to the database 

function getDBConnection() {
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    if($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $conn->set_charset("utf8mb4");
    return $conn;
}

session_start();

?>