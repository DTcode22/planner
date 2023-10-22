<?php
// Check if logged in
if (!isset($_COOKIE['user_id'])) {
    header("Location: /planner/index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/styles/dashboard-styles.css">
</head>

<body>
    <div class="navbar-container">
        <?php include "../templates/navbar.php" ?>
    </div>

    <div class="dashboard-container">
        <div class="dashboard-content">
            <div class="dashboard">
                <div class="sidepanel1">
                    <div class="add-task">
                        <form action="../includes/create_task.php" method="post">
                            <label for="task-name">Task Name:</label>
                            <input type="text" id="task-name" name="title" required>
                            <label for="task-desc">Task Description:</label>
                            <input type="text" name="description" id="task-desc" required>
                            <label for="task-estimate">Time Estimate:</label>
                            <input type="text" name="timeEstimate" id="task-estimate" required>
                            <label for="task-assign">Assign User:</label>
                            <input type="text" name="assignedTo" id="task-assign" required>
                            <button type="submit" id="submit">Add task</button>
                        </form>
                    </div>
                </div>
                <div class="panel">
                    <div class="top-panel">top-panel</div>
                    <div class="tasks">
                        <div class="task-panel">task-panel1</div>
                        <div class="task-panel">task-panel2</div>
                        <div class="task-panel">task-panel3</div>
                        <div class="task-panel">task-panel4</div>
                    </div>
                </div>
                <div class="sidepanel2">sidepanel2</div>
            </div>
        </div>
    </div>

    <div class="footer-container">
        <?php include "../templates/footer.php" ?>
    </div>
    <script>
        let x = document.getElementById("submit");
        x.addEventListener("click", function () {
            // Code to run when the button is clicked
            alert("Button clicked!");
        });
    </script>
</body>

</html>