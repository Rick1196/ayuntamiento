<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials.title-head',['title' => 'DEPENDENCIAS','subtitle'=>''], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="container">
<center>
    <img class="img-fluid" src="<?php echo e(asset('img/construccion.jpg')); ?>" alt="">
    </center>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>