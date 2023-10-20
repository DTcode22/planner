<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planner-Login</title>
    <style>
        body {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            margin: 0;
            padding: 0;
            font-family: "Arial", sans-serif;
            background-color: #f2f2f2;
            color: #333;
        }

        .login-container {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            min-width: 300px;
            padding: 10px;
            background-color: aquamarine;
        }

        form {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            gap: 10px;
        }

        a {
            text-decoration: none;
            cursor: pointer;
        }

        button {
            cursor: pointer;
        }
    </style>
</head>

<body>
    <?php include "../templates/navbar.php" ?>
    <div class="login-container">
        <form action="">
            <label>name:</label>
            <input type="text" id="name" required>
            <label>password:</label>
            <input type="text" id="pw" required>
            <button type="submit">submit</button>
            <div class="register">
                <h2>Dont have a account? Get started and register</h2>
                <button><a href="./pages/register.php" style="color:black">register here</a></button>

            </div>
        </form>
        <?php include "../templates/footer.php" ?>
    </div>
</body>

</html>