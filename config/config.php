<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "for_tasks";


$con = new PDO("mysql:host=$servername;dbname=$db;", $username, $password);
var_dump($con);
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
