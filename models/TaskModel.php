<?php
include_once 'includes/db.php'; // Include the database connection

class TaskModel {
    protected $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function createTask($title, $description) {
        $title = mysqli_real_escape_string($this->conn, $title);
        $description = mysqli_real_escape_string($this->conn, $description);

        $query = "INSERT INTO 0001_create_tasks_table (title, description, createdAt, updatedAt) VALUES ('$title', '$description', NOW(), NOW())";
        mysqli_query($this->conn, $query);

    }

    public function getTasks() {
        $tasks = array();

        $query = "SELECT * FROM 0001_create_tasks_table";
        $result = mysqli_query($this->conn, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            $tasks[] = $row;
        }

        return $tasks;
    }

    public function getTaskById($id) {
        
        $id = mysqli_real_escape_string($this->conn, $id);

        $query = "SELECT * FROM 0001_create_tasks_table WHERE id = $id";
        $result = mysqli_query($this->conn, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            return mysqli_fetch_assoc($result);
        }

        return null; // Task not found
    }


    public function updateTask($id, $title, $description) {
        $title = mysqli_real_escape_string($this->conn, $title);
        $description = mysqli_real_escape_string($this->conn, $description);

        $query = "UPDATE 0001_create_tasks_table SET title = '$title', description = '$description' WHERE id = $id";
        mysqli_query($this->conn, $query);
    }

    public function deleteTask($id) {
        $query = "DELETE FROM 0001_create_tasks_table WHERE id = $id";
        mysqli_query($this->conn, $query);
    }

    // Add methods for updating, deleting, and retrieving single tasks here
}
?>
