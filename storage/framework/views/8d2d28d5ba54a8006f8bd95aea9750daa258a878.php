<?php $__env->startSection('content'); ?>
<br><br><br>
    <div class="contianer">
        <section class="page-section clearfix">
            <div class="container">
              <div class="intro">
                <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="img/cartilla.jpeg" alt="">
                <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                  <h2 class="section-heading mb-4">
                    <span class="section-heading-upper">Cartilla Militar </span>
                    <span class="section-heading-lower">Si naciste en 2001, ya puedes inscribirte para tramitar tu cartilla del</span>
                  </h2>
                  <p class="mb-3">
                    Servicio Militar Nacional del 14 de enero al 15 de octubre, de lunes a viernes de 8:30 a 17 30 hrs. en la Plaza Fray Andrés de Castro, Edificio “D”, 1er piso, Col. Centro, Toluca, Estado de México.
                  </p>
                </div>
              </div>
            </div>
      </section>
    </div>
    <div class="container">
    <section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
              <h2 class="section-heading mb-4">
                <span class="section-heading-upper">Acude a la Junta Municipal de Reclutamiento con los siguientes documentos:</span>
                <span class="section-heading-lower"></span>
              </h2>
              <p class="mb-0"></p>
              <ul>
                  <li>Acta de Nacimiento</li>
                  <li>CURP</li>
                  <li>Comprobante de domicilio reciente</li>
                  <li>Último grado de estudios</li>
                  <li>4 Fotografías tamaño cartilla</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
</section>
    </div>
<?php $__env->stopSection(); ?>
<link href="<?php echo e(asset('css/publicaciones.css')); ?>" rel="stylesheet">
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>