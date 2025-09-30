<?php
session_start();
if (!isset($_SESSION['user'])) {
  header("Location: login.php");
  exit();
}
?>
<main style="text-align:center; padding:50px;">
  <h2>Welcome, <?php echo htmlspecialchars($_SESSION['user']); ?>!</h2>
  
  <p style="margin-top: 20px;">You have successfully logged in to the Swinburne Portal.</p>
</main>
<?php include 'footer.inc'; ?>