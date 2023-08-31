
<?php 
    
    @include("./includes/nav.php");
?>


<div class="px-6 py-4 container max-w-7xl">
  <div class="flex items-center justify-center">
  <?php
    if (isset($_GET['id'])) {
        $task_id = $_GET['id'];
        $task = $taskController->getTaskById($task_id); // Assuming you have implemented this method
        
        if (!$task) {
            echo "Task not found.";
        } else {

    ?>
  <form 
  action=""
  method="POST"
  class="w-full ">
  <div class="space-y-6">
    <div class="border-b border-gray-900/10 pb-12">
      <div class="border-b border-gray-900/10 pb-6">
        <h2 class="text-3xl font-extrabold leading-7 text-gray-900">Update This Task</h2>
        <p class="mt-1 text-sm leading-6 text-neutral-500">Update the existing task that is already assigned to an employee</p>
      </div>
      
      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-4">
          <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
          <div class="mt-2">
            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
            <input  type="text" name="title" id="title" required autocomplete="title" class="block flex-1 border-0 bg-transparent py-3 px-4 text-gray-900 placeholder:text-gray-400 focus:ring-0 outline-none  " value="<?php echo $task['title']; ?>" >
            </div>
          </div>
        </div>

        <div class="col-span-full">
          <label for="description" class="block text-sm font-medium leading-6 text-gray-900">Description</label>
          <div class="mt-2">
          <textarea id="description" name="description" rows="3" class="block w-full rounded-md border-0 py-3 px-4 shadow-sm ring-1 ring-inset outline-0 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 " required><?php echo $task['description']; ?></textarea>'
          
          </div>
          <p class="mt-3 text-sm leading-6 text-gray-600">Write a few sentences describing the task.</p>
        </div>

 

        <div class="col-span-full mt-6 flex items-center justify-end gap-x-6">
            <button type="submit" name="update_task" class="rounded-md bg-indigo-600 px-10 tracking-wider py-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Continue</button>
        </div>
</form>
<?php
        if (isset($_POST['update_task'])) {
            $updated_title = $_POST['title'];
            $updated_description = $_POST['description'];
            $taskController->updateTask($task_id, $updated_title, $updated_description);
            
            header("Location: index.php"); // Redirect after updating task
        }
    }
} else {
    echo "Task ID not provided.";
}
?>
  </div>
</div>



<?php
@include("./includes/footer.php")
?>
