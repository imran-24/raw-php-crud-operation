
<?php 
    if(isset($_SESSION['message'])) :
?>
    <div class="w-full flex items-center justify-end">
        <div class="bg-rose-100 border-l-4 border-green-500 text-border-green-500 px-4 py-3 w-[400px]" role="alert">
            <p class="font-semibold tex-sm"><?= $_SESSION['message'] ?></p>
        </div>
    </div>
<?php 
    unset($_SESSION['message']);
    endif;
?>


     <!-- <div>
        <div class="bg-rose-100 border-l-4 border-rose-500 text-rose-500 px-4 py-3" role="alert">
            <p class="font-semibold tex-sm">{{ Session::get('error') }}</p>
        </div>
    </div> -->