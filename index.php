<?php
// Include necessary files
// require_once 'includes/db_connection.php';
// require_once 'includes/session.php';
// require_once 'includes/functions.php';

// Check if the user is logged in
// if (!is_logged_in()) {
//     Redirect to the login page if not logged in
//     header("Location: login.php");
//     exit();
// }

// Retrieve user information (you may have a function for this in functions.php)
// $user = get_user_by_id($_SESSION['user_id']);

// Include the header template
include 'templates/header.php';
?>

<!-- Your HTML content for the homepage goes here -->

<div>
    <h1>Welcome!</h1>
    <!-- Display other content or links to various sections of your application -->
    <h2>User Registration</h2>
    <form action="process_registration.php" method="POST">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required /><br />

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required /><br />

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required /><br />

      <input type="submit" value="Register" />
    </form>
</div>

<!-- Include the footer template -->
<?php include 'templates/footer.php'; ?>

