<!Doctype html>
<html>
  <p>array</p>
    <?php if(count($array) == 0): ?>
        <p>Error! Array is empty</p>
    <?php elseif(count($array) == 5): ?>
        <p> Array is 5 elements long </p>
    <?php endif; ?>

    <?php $__currentLoopData = $array; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p> <?php echo e($element); ?> </p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
</html>
<?php /**PATH E:\Bitnami\wampstack-8.0.20-0\apache2\htdocs\yumukr\resources\views/array.blade.php ENDPATH**/ ?>