

<?php 
    ob_start();
    @include("./includes/nav.php");
    
?>
    
    
<div class="px-6 py-4  container max-w-7xl">
    <div class="py-6 flex justify-between items-center border-b border-gray-900/10 pb-6">
        <div class="">
            <h2 class="text-3xl font-extrabold leading-7 text-gray-900">All Tasks</h2>
            <p class="mt-1 text-sm leading-6 text-neutral-500">All tasks are listed in this table</p> 
        </div>
        <a
        href="index.php?page=create_task"
        class='disabled:opacity-70  disabled:cursor-not-allowed rounded-lg font-semibold
        flex items-center justify-center gap-3
        cursor-not-allowed text-sm w-auto px-16
        py-2  bg-indigo-600 text-white hover:bg-indigo-500'>
        Create
            <span class="material-symbols-outlined text-white pl-1">
            add
            </span>
        </a>

        
    </div> 
    <div class="flex flex-col items-center justify-center">
        
        
            <!-- {
                categories?.map((category) =>( -->
                <?php
                
                $tasks = $taskController->getTasks(); // Assuming you have implemented this method

                if(!$tasks) {
                    echo "<span class='text-sm py-2 px-4  cursor-pointer'>No Task Found</span>";
                } else {
                echo "<table class='table-auto w-full'>
                        <thead>
                        <tr class='border-b bg-neutral-100 '>
                        <th class='text-start rounded-sm py-2 px-4  text-sm text-neutral-500'>Title</th>
                        <th class='text-start rounded-sm py-2 px-4  text-sm text-neutral-500'>Description</th>
                        <th class='text-start rounded-sm py-2 px-4  text-sm text-neutral-500'>Edit</th>
                        <th class='text-start rounded-sm py-2 px-4  text-sm text-neutral-500'>Delete</th>
                    </tr>
                    </thead>
                    <tbody>";
                    foreach ($tasks as $task) {
                        echo "<tr  class='border-b hover:bg-neutral-100'>";
                        echo "<td class='text-sm py-2 px-4 min-w-[200px] cursor-pointer'>
                                <div>{$task['title']}</div>
                            </td>";
                        echo "<td class='text-sm py-2 px-4 min-w-[200px] cursor-pointer'>
                                <div>{$task['description']}</div>
                            </td>";

                        echo "<td class='text-sm py-2 px-4  hover:text-gray-400   cursor-pointer'>
                                <a
                                href='index.php?page=edit_task&id={$task['id']}'
                                class='transition disabled:opacity-70  disabled:cursor-not-allowed rounded-lg font-semibold
                                    flex items-center justify-center 
                                    cursor-poitner
                                    bg-green-500
                                    w-10
                                    p-2'>
                                    
                                    <div class=' hover:rotate-45 transition duration-200'>
                                        <span  class='material-symbols-outlined text-white'>
                                        edit
                                        </span>
                                    </div>

                                </a>
                            </td>";
                         
                            echo "<td class='text-sm py-2 px-4  hover:text-gray-400  cursor-pointer'>
                                <form action='' method='post'>
                                <button 
                                type='submit'
                                name='delete_task'
                                class='transition disabled:opacity-70  disabled:cursor-not-allowed rounded-lg font-semibold
                                    flex items-center justify-center gap-3
                                    cursor-poitner
                                    bg-rose-500
                                    w-10
                                    p-2'>
                                    
                                    <div class=' hover:rotate-45 transition duration-200'>
                                        <span class='material-symbols-outlined text-white'>
                                        delete
                                        </span>
                                    </div>
                                    
            
                                </button>
                                </form>";

                                
                                echo "</td>";
                            

                            
                        echo "</tr>";
                    
                        
                            
                        
                        
                    }
                }
                ?>
            </tbody>
        </table>
        </div>
    </div>
    
<?php

    if (isset($_POST['delete_task'])) {
        $taskController->deleteTask($task['id']);
        ob_end_clean();
        header("Location: index.php"); // Redirect after deleting task
    }
    @include("./includes/footer.php")
?>

