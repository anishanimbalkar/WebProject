<!DOCTYPE html>
<html>
<head>
  <title>Select Quiz</title>
  <link rel="stylesheet" href="login.css">
</head>
<body>

<div class="auth-box">
  <h2>Select Number of Questions</h2>

  <form action="quiz.php" method="get">
    <input type="number" name="limit" placeholder="Enter number (e.g. 5 or 10)" required min="1">
    <button type="submit">Start Quiz</button>
  </form>
</div>

</body>
</html>
