<?php include 'header.inc'; ?>
    <h2 style="text-align:center;">Login</h2>
    <?php
      if (isset($_GET['error'])) {
        echo "<p style='color:red; text-align:center;'>Invalid login. Please try again.</p>";
      }
    ?>
    <form method="POST" action="process.php">
      <label for="username">Username:</label>
      <input type="text" name="username" id="username" required style="width:100%; padding:8px; margin-top:5px;"><br>

      <label for="password">Password:</label>
      <input type="password" name="password" id="password" required style="width:100%; padding:8px; margin-top:5px;"><br>

      <input type="hidden" name="token" value="t12345678">

      <input type="submit" value="Login" style="width:100%; padding:10px; margin-top:20px; background-color:#0077cc; color:white; border:none; border-radius:4px;">
    </form>
  </div>
</main>
<?php include 'footer.inc'; ?>