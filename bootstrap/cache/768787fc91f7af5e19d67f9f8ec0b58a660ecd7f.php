<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <title>Admin Panel - </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="/css/all.css">



<script src="https://use.fontawesome.com/2e638a8146.js"></script>



</head>
<body>
    

<?php echo $__env->make('includes.admin-sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>




<div class="off-canvas-content admin_title_bar" data-off-canvas-content>
    <!-- Your page content lives here -->
    <div class="title-bar">
        <div class="title-bar-left">
            <button class="menu-icon hide-for-large" type="button" data-open="offCanvas" title="Title"></button>
            <span class="title-bar-title"><?php echo e($_ENV['APP_NAME']); ?></span>
        </div>
    </div>

   <?php echo $__env->yieldContent('content'); ?>
</div>

<script src="/js/all.js"></script>
</body>
</html>