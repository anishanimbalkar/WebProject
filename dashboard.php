<?php
session_start();
include 'db.php';

$username = $_SESSION['username'];

$sql = "SELECT fullname, email FROM students WHERE username='$username'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
  <title>User Dashboard</title>
  <link rel="stylesheet" href="login.css">
</head>
<body>

<div class="auth-box">
  <h2>Welcome 🎉</h2>

  <p><strong>Name:</strong> <?php echo $row['fullname']; ?></p>
  <p><strong>Email:</strong> <?php echo $row['email']; ?></p>

  <a href="select_questions.php">Start Quiz</a>

  <a href="logout.php">Logout</a>
</div>

</body>
</html>
