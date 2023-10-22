<?php
// Check if logged in
if (isset($_COOKIE['user_id'])) {
    header("Location: /planner/pages/dashboard.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planner homepage</title>
    <link rel="stylesheet" href="assets/styles/styles.css">
</head>

<body>
    <!-- full-vw-container -->
    <div class="full-vw">

        <!-- navbar-container -->
        <div class="navbar-container">
            <?php include "templates/navbar.php" ?>
        </div>

        <div class="login-container">
            <div class="login-content">
                <div class="outer-green-box"></div>
                <div class="outer-white-box"></div>
                <div class="login-box-container">
                    <div class="inner-green-box">
                        <div class="inner-green-box-content">
                            <div class="svg-container"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                                    viewBox="0 0 48 48">
                                    <g fill="none" stroke-width="4">
                                        <path fill="#2F88FF" stroke="#000" stroke-linejoin="round"
                                            d="M5 19H43V41C43 42.1046 42.1046 43 41 43H7C5.89543 43 5 42.1046 5 41V19Z" />
                                        <path stroke="#000" stroke-linejoin="round"
                                            d="M5 10C5 8.89543 5.89543 8 7 8H41C42.1046 8 43 8.89543 43 10V19H5V10Z" />
                                        <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round"
                                            d="M16 31L22 37L34 25" />
                                        <path stroke="#000" stroke-linecap="round" d="M16 5V13" />
                                        <path stroke="#000" stroke-linecap="round" d="M32 5V13" />
                                    </g>
                                </svg></div>
                            <h1>Planner App</h1>
                            <h3>Our app1 is so good yo look its amazing man its crazy stuff</h3>
                        </div>
                    </div>
                    <div class="inner-white-box">
                        <div class="inner-white-box-container">
                            <h1>Log in</h1>
                            <div class="user-container">
                                <form action="includes/process_login.php" method="POST">
                                    <label for="username">Username:</label>
                                    <input type="text" placeholder="username" id="username" name="username"
                                        required></input>
                                    <label for="password">Password:</label>
                                    <input type="password" id="password" name="password" placeholder="password"
                                        required /><br />
                                    <input type="submit" value="Log in" class="inputbutton" />
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="footer-container">
            <?php include "templates/footer.php" ?>
        </div>
    </div>

    <script src="assets/js/script.js"></script>
</body>