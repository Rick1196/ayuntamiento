<?php $__env->startSection('content'); ?>
<br><br>
    <div class="container">
        <admin-sitios></admin-sitios>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app_workers', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>