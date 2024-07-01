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

        $stmt = $con->prepare("INSERT INTO users(name,email,password)VALUES (:name, :email,:password)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $hashPassword);
        $stmt->execute();
    }
}
