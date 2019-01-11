<!DOCTYPE html>
<html lang="es">
<head>
    <?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->yieldContent('css'); ?>
</head>
</head>
<body >
    <?php echo $__env->make('partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <main role="main" id="contenedor">
        <?php echo $__env->yieldContent('content'); ?>
        <?php $__env->startSection('title', 'CABILDO'); ?>
    </main>
    <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('partials.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="bg_load">
            <img src="<?php echo e(asset('img/LogoTOLUCA.jpg')); ?>" style=" height: 100%;width:100%;background-position: center;background-repeat: no-repeat;background-size: cover;" alt="Toluca">
    </div>
    <div class="wrapper">
        <div class="inner">
        </div>
    </div>
</body>
</html>
