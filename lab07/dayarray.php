<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Days of the Week</title>
</head>
<body>
  <h1>Days of the Week in English</h1>
  <?php
    $days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
    echo "<ul>";
    foreach ($days as $day) {
      echo "<li>$day</li>";
    }
    echo "</ul>";
  ?>
</body>
</html>