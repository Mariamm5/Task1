<?php
$servername = "localhost";
$username = "root";  
$password = "";
$db = "for_tasks";
$con = mysqli_connect($servername, $username, $password, $db);

if ($con) {
    echo "It's connected!<br>";
} else {
    echo "Not connected!";
    die();
}