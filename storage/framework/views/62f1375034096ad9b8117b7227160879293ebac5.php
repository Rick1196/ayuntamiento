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

    <div class="bg_load"></div>
    <div class="wrapper">
        <div class="inner">
            <span>T</span>
            <span>o</span>
            <span>l</span>
            <span>u</span>
            <span>c</span>
            <span>a</span>
        </div>
    </div>
</body>
</html>
