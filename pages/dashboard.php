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
        <div class="nav">
            <?php include "../templates/navbar.php" ?>
        </div>
    </div>



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
                        <div id="task-container">

                        </div>
                    </div>
                    <div class="task-panel">task-panel2</div>
                    <div class="task-panel">task-panel3</div>
                    <div class="task-panel">task-panel4</div>
                </div>
            </div>
            <div class="sidepanel2">sidepanel2</div>

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
                    dataJson = JSON.parse(data);

                    // Create a new task element
                    const taskElement = document.createElement('div');
                    taskElement.classList.add('task');

                    // Create and set the content for the various sub-elements of the task
                    const titleElement = document.createElement('div');
                    titleElement.classList.add('title');
                    titleElement.textContent = dataJson.tasks[0].title;

                    const descriptionElement = document.createElement('div');
                    descriptionElement.classList.add('description');
                    descriptionElement.textContent = 'description12';

                    const timeEstimateElement = document.createElement('div');
                    timeEstimateElement.classList.add('timeEstimate');
                    timeEstimateElement.textContent = 'timeEstimate12';

                    const assignedToElement = document.createElement('div');
                    assignedToElement.classList.add('assignedTo');
                    assignedToElement.textContent = 'assignedTo12';

                    const assignedByElement = document.createElement('div');
                    assignedByElement.classList.add('assignedBy');
                    assignedByElement.textContent = 'assignedBy12';

                    const stageElement = document.createElement('div');
                    stageElement.classList.add('stage');
                    stageElement.textContent = 'stage12';

                    // Append the sub-elements to the task element
                    taskElement.appendChild(titleElement);
                    taskElement.appendChild(descriptionElement);
                    taskElement.appendChild(timeEstimateElement);
                    taskElement.appendChild(assignedToElement);
                    taskElement.appendChild(assignedByElement);
                    taskElement.appendChild(stageElement);

                    // Append the task element to the task container
                    // const taskContainer = document.getElementById('task-container');
                    taskContainer.appendChild(taskElement);



                    console.log(dataJson.tasks[0] + "tasks[0]");
                    console.log(dataJson.tasks[0].title + "tasks[0].title <==");
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