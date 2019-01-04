<?php $__env->startSection('content'); ?>
<div class="container">
<center>
    <img class="img-fluid" src="<?php echo e(asset('img/construccion.jpg')); ?>" alt="">
    </center>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>