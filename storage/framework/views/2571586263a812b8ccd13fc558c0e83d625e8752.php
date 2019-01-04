<?php $__env->startSection('content'); ?>
<br><br>
    <div class="container">
        <?php if(count($errors) > 0): ?>
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
        <?php endif; ?>
        <?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div> 
        <?php endif; ?>
        <form method="post" action="<?php echo e(url('file')); ?>" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>


            <div class="input-group control-group increment" >
            <input type="file" name="file" class="form-control">
            </div>
            <br>
            <button type="submit" class="btn btn-primary" style="margin-top:10px">Subir</button>
        </form>
        <div class="table-responsive-xl">
            <table class="table">
                <thead>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Opciones</th>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $archivos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $archivo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th><?php echo e($loop->index +1); ?></th>
                        <td><?php echo e($archivo->original_filename); ?></td>
                        <td><?php echo e($archivo->created_at); ?></td>
                        <td><a href="<?php echo e(asset('files/'.$archivo->filename)); ?>" class="btn btn-primary">Ver</a></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layout.app_workers', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>