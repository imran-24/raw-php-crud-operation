<?php
include_once 'models/TaskModel.php';

class TaskController {
    protected $taskModel;

    public function __construct() {
        global $conn;
        $this->taskModel = new TaskModel($conn);
    }

    public function createTask($title, $description) {
        $this->taskModel->createTask($title, $description);
    }

    public function getTasks() {
        return $this->taskModel->getTasks();
    }

    public function updateTask($id, $title, $description) {
        $this->taskModel->updateTask($id, $title, $description);
    }

    public function deleteTask($id) {
        $this->taskModel->deleteTask($id);
    }

    public function getTaskById($id) {
        return $this->taskModel->getTaskById($id);
    }

    // Add controller methods for updating, deleting, and retrieving single tasks here
}
?>
