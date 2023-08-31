
<?php 
    ob_start();
    @include("./includes/nav.php");
?>
    

        <div class="px-6 py-4  container max-w-7xl">
            
            <div class="flex flex-col items-center justify-center ">
            <!-- ?php
                @include("./includes/alert-message.php");
            ? -->
            <form class="w-full" method="POST" action="" >
            <div class="space-y-6">
                <div class="border-b border-gray-900/10 pb-12">
                    <div class="border-b border-gray-900/10 pb-6">
                        <h2 class="text-3xl font-extrabold leading-7 text-gray-900">Create a new Task</h2>
                        <p class="mt-1 text-sm leading-6 text-neutral-500">This task will be assigned to a perticular employee</p>
                    </div>
                
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                    <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
                    <div class="mt-2">
                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                        <input type="text" name="title" id="title" autocomplete="title" class="block flex-1 border-0 bg-transparent py-3 px-4  text-sm  placeholder:text-gray-400 focus:ring-0 outline-none  " >
                        </div>
                    </div>
                    </div>

                    <div class="col-span-full">
                    <label for="description" class="block text-sm font-medium leading-6 text-gray-900">Description</label>
                    <div class="mt-2">
                        <textarea id="description" name="description" rows="3" class="block w-full rounded-md border-0 py-3 px-4  shadow-sm ring-1 ring-inset outline-0 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                    </div>
                    <p class="mt-3 text-sm leading-6 text-gray-600">Write a few sentences describing the task.</p>
                    </div>

            

                    <div class="col-span-full mt-6 flex items-center justify-end gap-x-6">
                        <button type="submit" name="add_task" class="rounded-md bg-indigo-600 px-10 tracking-wider py-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create</button>
                    </div>
                </form>
                </div>
            </div>'
    
<?php
    include './includes/db.php';
    
    if (isset($_POST['add_task'])) {
        $title = $_POST['title'];
        $description = $_POST['description'];
                
        $taskController->createTask($title, $description);
        ob_end_clean();
        header("Location: index.php"); // Redirect after deleting task

    }


    @include("./includes/footer.php")
  ?>



