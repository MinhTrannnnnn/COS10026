<?php
session_start();

$correctUsername = "Minh Tran";         // Replace with your actual name
$correctPassword = "105227448";    // Replace with your actual student ID

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = trim($_POST["username"]);
  $password = trim($_POST["password"]);

  if ($username === $correctUsername && $password === $correctPassword) {
    $_SESSION['user'] = $username;
    header("Location: welcome.php");
    exit();
  } else {
    header("Location: login.php?error=1");
    exit();
  }
}
?>