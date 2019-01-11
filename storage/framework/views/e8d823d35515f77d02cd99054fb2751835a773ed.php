<?php $__env->startSection('content'); ?>
<br><br><br><br>
    <div class="container">
        <p class="text-centered"><h1>Documentos de Acceso a la Información Pública de Oficio</h1></p>
    <div class="table-responsive-xl">
            <table class="table">
                <tbody>
                    <?php $__currentLoopData = $archivos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $archivo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($archivo->descripcion); ?></td>
                        <td><?php echo e($archivo->created_at); ?></td>
                        <td><a href="<?php echo e(asset('/files/'.$archivo->file->filename)); ?>" class="btn btn-primary">Ver</a></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>