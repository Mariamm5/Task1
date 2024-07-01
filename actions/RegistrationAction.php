<?php
include_once "../config/config.php";
global $con;

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $error = false;

    if (empty($name) || empty($email) || empty($password)) {
        $error = true;
        echo "All fields are required.";
    }

    if (!$error) {

        $hashPassword = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO `users`(`name`,`email`,`password`)
        VALUES ('$name','$email','$hashPassword')";
        mysqli_query($con, $sql); 
    }
}
