<?php
include "database.php"

class Task {
    public $id;
    public $title;
    public $description;
    public $timeEstimate;
    public $assignedTo;
    public $assignedBy;
    public $stage;

    public function __construct($title, $description, $timeEstimate, $assignedTo, $assignedBy, $stage) {
        $this->title = $title;
        $this->description = $description;
        $this->timeEstimate = $timeEstimate;
        $this->assignedTo = $assignedTo;
        $this->assignedBy = $assignedBy;
        $this->stage = $stage;
    }

    public static function createFromId($id) {
        // Example:
        // task = Task()::createFromId()
        
        $taskData = getTaskData($id);
        $assignedTo = getUserDataById($taskData['assignedTo'])
        $assignedBy = getUserDataById($taskData['assignedBy'])

        $task = new self(
            $taskData['title'],
            $taskData['description'],
            $taskData['timeEstimate'],
            $assignedTo,
            $assignedBy,
            $taskData['stage']
        );

        return $task;
    }
}
?>