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
                            <button type="submit" id="submit">Add task</button>
                        </form>
                    </div>
                </div>
                <div class="panel">
                    <div class="top-panel">top-panel</div>
                    <div class="tasks">
                        <div class="task-panel" id="task-panel">
                            <h1 id="task-panel-name">To Do</h1>
                            <div class="task-container">placeholder</div>
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
        // Get a reference to the form element by its ID
        var form = document.getElementById("myForm");

        // Add a submit event listener to the form
        form.addEventListener("submit", function (event) {
            // Prevent the default form submission
            event.preventDefault();

            // You can perform other actions here, such as form validation or making an AJAX request
            // For this example, we'll just log the form data
            var formData = new FormData(form);
            for (var pair of formData.entries()) {
                console.log(pair[0] + ": " + pair[1]);
            }
        });
        let x = document.getElementById("submit");
        let y = document.getElementById("task-panel");
        console.log(x, "     sadas   ", y)

        x.addEventListener("click", function () {
            // Create a new div element
            var newDiv = document.createElement("div");

            // Set content or attributes for the new div
            newDiv.textContent = "This is a dynamically created div.";
            newDiv.className = "dynamic-div"; // You can add CSS classes

            // Append the new div to the container
            y.appendChild(newDiv);
            console.log("23333");
        });

    </script>
</body>

</html>