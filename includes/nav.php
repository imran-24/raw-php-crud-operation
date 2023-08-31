<?php 
    
    @include('./includes/db.php');
   

?>

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./styles.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

</head>
    <body class="relative w-full flex flex-col items-center justify-center">
        
        <nav class="w-full sticky top-0 left-0 z-50 bg-white">
            <div class="px-4 py-3 w-full border-b ">
                <div class="flex flex-row items-center gap-6">
                    
                    <div class="text-lg">Task-Rise</div>
                    <div class="flex items-center gap-3 flex-1">
                        <div>
                        <a href="index.php?page=task_list" class="text-lg">Task</a>                        </div>
                        <div>
                            <a href="" class="text-lg">Conplaint</a>
                        </div>
                    </div>
                    <div>
                        <img src="../../user-placeholder.png" class="rounded-full w-8 h-8 hover:opacity-80 cursor-pointer transition" alt="">
                    </div>
                </div>
            </div>
        </nav>
