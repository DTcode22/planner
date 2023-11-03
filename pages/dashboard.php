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
                        <!-- action="../includes/create_task.php" method="post" -->
                        <form id="myForm">
                            <label for="task-name">Task Name:</label>
                            <input type="text" id="task-name" name="title" required>
                            <label for="task-desc">Task Description:</label>
                            <input type="text" name="description" id="task-desc" required>
                            <label for="task-estimate">Time Estimate:</label>
                            <input type="text" name="timeEstimate" id="task-estimate" required>
                            <label for="task-assign">Assign User:</label>
                            <input type="text" name="assignedTo" id="task-assign" required>
                            <button type="submit" id="submit-button">Add task</button>
                        </form>
                    </div>
                </div>
                <div class="panel">
                    <div class="top-panel">top-panel</div>
                    <div class="tasks">
                        <div class="task-panel" id="task-panel">
                            <h1 id="task-panel-name">To Do</h1>
                            <div id="task-container">placeholder</div>
                        </div>
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
        const form = document.getElementById('myForm');
        const taskContainer = document.getElementById("task-container");
        function createTask(event) {
            event.preventDefault();
            const formData = new FormData(form);
            
            //php call to insert_task.php
            fetch('../includes/insert_task.php', {
                method: 'POST',
                body: formData,
            })
                .then(response => response.text())
                .then(data => {
                    // Handle the response from the PHP file (e.g., a success message)
                    taskContainer.textContent = `Task added successfully!`;
                    console.log(data + "datagoeshere");
                })
                .catch(error => {
                    // Handle any errors that occur during the request
                    taskContainer.textContent = `Error: Task not added`;
                    console.error(error);
                });
        }
        form.addEventListener("submit", createTask);
    </script>
</body>

</html>