<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Quiz Result</title>
  <link rel="stylesheet" href="result.css">
</head>
<body>

<div class="result-box">
  <h2>Quiz Completed 🎉</h2>
  <p>Your Score: <strong><?php echo $_GET['score']; ?></strong></p>
  <a href="logout.php">Logout</a>
</div>

</body>
</html>
