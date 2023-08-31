
  <?php 
  include 'includes/db.php';
  include 'controllers/taskController.php';
  // include 'controllers/complaintController.php';  // Include the new controller
  
  $taskController = new TaskController();
  // $complaintController = new ComplaintController();
    
    if (isset($_GET['page'])) {
      $page = $_GET['page'];
      switch ($page) {
          case 'create_task':
              include 'views/create_task.php';
              break;
          case 'edit_task':
              include 'views/edit_task.php';
              break;
          case 'view_task':
              include 'views/view_task.php';
              break;
          default:
              include 'views/task_list.php';
              break;
      }
  } else {
      include 'views/task_list.php';
  }

  ?>
