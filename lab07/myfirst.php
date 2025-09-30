<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My First PHP Script</title>
</head>
<body>
  <h1>PHP Array and Conditional Example</h1>
  <?php
    $marks = [85, 85, 95];
    $marks[1] = 90;

    $total = array_sum($marks);
    $ave = $total / count($marks);

    if ($ave >= 50) {
      $status = "PASSED";
    } else {
      $status = "FAILED";
    }

    echo "<p>Average mark: $ave</p>";
    echo "<p>Status: $status</p>";
  ?>
</body>
</html>