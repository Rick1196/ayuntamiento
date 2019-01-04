<?php $__env->startSection('content'); ?>
<br><br>
    <div class="container">
        <?php if($mensaje != ''): ?>
            <div class="alert alert-success alert-block">
            
                <button type="button" class="close" data-dismiss="alert">×</button>
            
                    <strong><?php echo e($mensaje); ?></strong>
            
            </div>
        
        <?php endif; ?>
        <br><br>
        <div class="row">
            <div class="col-md-8"></div>
            <div class="col-md-4"><a href="<?php echo e(route('registro')); ?>" class="btn btn-primary">Registrar usuario</a></div>
        </div><br><br>
        <admin-com></aadmin-com>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app_workers', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>