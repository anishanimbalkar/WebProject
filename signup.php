<?php
include 'db.php';

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

/* Simple password validation in PHP */
if (strlen($password) < 6) {
    die("Password must be at least 6 characters long");
}

$sql = "INSERT INTO students (fullname, email, username, password)
        VALUES ('$fullname', '$email', '$username', '$password')";

mysqli_query($conn, $sql);

header("Location: login.html");
?>
