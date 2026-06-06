<?php 

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "root";
$dbname = "send_it";

if(!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname))
{
    die("failed to connect!");
}

?>