<?php
include '../templates/header.php';
include "../templates/navbar.php";
?>
<h2>User Registration</h2>
    <form action="./includes/process_registration.php" method="POST">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required /><br />

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required /><br />

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required /><br />

      <input type="submit" value="Register" />
    </form>
    <style>
        
    </style>
    <?php include '../templates/footer.php'; ?>