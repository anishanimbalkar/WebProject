<?php
session_start();
include 'db.php';

$limit = $_GET['limit'];

$sql = "SELECT * FROM questions ORDER BY RAND() LIMIT $limit";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
  <title>MCA Quiz</title>
  <link rel="stylesheet" href="quiz.css">
</head>
<body>

<div class="quiz-box">
  <h2>MCA Online Quiz</h2>

  <form action="submit.php" method="post">
    <?php
    $i = 1;
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<p>$i. {$row['question']}</p>";

        echo "<input type='radio' name='q{$row['id']}' value='{$row['option1']}' required> {$row['option1']}<br>";
        echo "<input type='radio' name='q{$row['id']}' value='{$row['option2']}'> {$row['option2']}<br>";
        echo "<input type='radio' name='q{$row['id']}' value='{$row['option3']}'> {$row['option3']}<br>";
        echo "<input type='radio' name='q{$row['id']}' value='{$row['option4']}'> {$row['option4']}<br>";

        echo "<input type='hidden' name='correct{$row['id']}' value='{$row['correct_option']}'>";

        $i++;
    }
    ?>
    <button type="submit">Submit Quiz</button>
  </form>
</div>

</body>
</html>
