<?php
session_start();
include 'db.php';

$username = $_SESSION['username'];
$score = 0;

foreach ($_POST as $key => $value) {
    if (strpos($key, 'q') === 0) {
        $id = substr($key, 1);
        if ($value === $_POST["correct$id"]) {
            $score++;
        }
    }
}

$sql = "INSERT INTO results (username, score)
        VALUES ('$username', '$score')";
mysqli_query($conn, $sql);

header("Location: result.php?score=$score");
?>
