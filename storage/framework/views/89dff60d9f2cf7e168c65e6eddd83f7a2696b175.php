<!DOCTYPE html>
<html lang="es">
<head>
    <?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->yieldContent('css'); ?>
</head>
<body>
    <?php echo $__env->make('partials.navbar_worker', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <main role="main" id="contenedor">
        <div id="app">
        <?php echo $__env->yieldContent('content'); ?>
        <?php $__env->startSection('title', 'CABILDO'); ?>
        </div>
    </main>
    <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('partials.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <script src="<?php echo e(elixir('js/app.js')); ?>"></script>
</body>
</html>