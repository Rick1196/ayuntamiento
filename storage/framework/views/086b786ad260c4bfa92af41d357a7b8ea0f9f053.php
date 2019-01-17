<?php $__env->startSection('content'); ?>
<br><br><br>
    <div class="contianer">
        <section class="page-section clearfix">
            <div class="container">
              <div class="intro">
                <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="img/predial.jpg" alt="">
                <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                  <h2 class="section-heading mb-4">
                    <span class="section-heading-upper">Descuentos de predial </span>
                    <span class="section-heading-lower">DESCUENTOS DE PREDIAL 2019</span>
                  </h2>
                  <p class="mb-3">
                  3, 6, 9 y 12 meses sin intereses (consulta los bancos participantes).
                  </p>
                </div>
              </div>
            </div>
      </section>
    </div>
<?php $__env->stopSection(); ?>
<link href="<?php echo e(asset('css/publicaciones.css')); ?>" rel="stylesheet">

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>