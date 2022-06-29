<!DOCTYPE HTML>
<html>
 <head>
  <meta charset="utf-8">
  <title>lab5</title>
 </head>  
 <body> 
    <p>article</p>
    <div class=><?php echo e($first_article->text); ?></div>
    <?php $__env->startSection('footer'); ?>
        <?php $__env->stopSection(); ?>
    <?php if(count($array) == 1): ?>
        <p>Error! Array is not full</p>
    <?php elseif(count($array) == 5): ?>
        <p> Array is 5 elements long </p>
    <?php endif; ?>

    <?php $__currentLoopData = $array; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p> <?php echo e($element); ?> </p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 </body>
</html>


<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Bitnami\wampstack-8.0.20-0\apache2\htdocs\yumukr\resources\views/article.blade.php ENDPATH**/ ?>