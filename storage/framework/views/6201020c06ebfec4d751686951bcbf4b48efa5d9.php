
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials.title-head',['title' => 'NUESTRO MUNICIPIO','subtitle'=>''], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="container">
<h3 class="red-text">
    <strong >DIRECTORIO TURÍSTICO</strong>
    <small class="text-muted">TOLUCA</small>
</h3><b><hr style="border-top: 3px solid red;"></b><br>
<div class="row">
        
<div class="col-md-4">
<!--Accordion wrapper-->
<div class="accordion md-accordion accordion-3 z-depth-1-half" id="accordionEx1" role="tablist"
aria-multiselectable="true">


<ul class="list-unstyled d-flex justify-content-center pt-4 red-text">
  <li><i class="fa fa-building mr-3 fa-4x" aria-hidden="true"></i></li>
  <li><b><hr></b></li>
  
  
</ul>

<h2 class="text-center text-uppercase py-4 px-3">EDIFICIOS GUBERNAMENTALES</h2>

<hr class="mb-0">

<!-- Accordion card -->

<div class="card">


</div>
<?php $__currentLoopData = $gob; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $edif): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="card">

  <!-- Card header -->
  <div class="card-header" role="tab" id="heading4">
    <a data-toggle="collapse" data-parent="#accordionEx1" href="<?php echo e('#id'.$edif->id); ?>" aria-expanded="true"
      aria-controls="collapse4">
      <h4 class="text-center mb-0 mt-3 red-text">
        <?php echo e($edif->nombre); ?> <i class="fa fa-angle-down rotate-icon fa-2x"></i>
      </h4>
    </a>
  </div>

  <!-- Card body -->

  <div id="<?php echo e('id'.$edif->id); ?>" class="collapse" role="tabpanel" aria-labelledby="heading4" data-parent="#accordionEx1">
    <div class="card-body pt-0">
      <p><?php echo e($edif->descripcion); ?></p>
    </div>
  </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<!-- Accordion card -->
</div>
<!--/.Accordion wrapper-->


        </div>
        
        <div class="col-md-4">
                <div class="accordion md-accordion accordion-3 z-depth-1-half" id="accordionEx2" role="tablist"
                aria-multiselectable="true">
                
                <ul class="list-unstyled d-flex justify-content-center pt-4 red-text">
                  <li><i class="fas fa-church mr-3 fa-4x" aria-hidden="true"></i></li>
                  <li><b><hr></b></li>
                  
                  
                </ul>
                
                <h2 class="text-center text-uppercase py-4 px-3">ARQUITECTURA RELIGIOSA</h2>
                
                <hr class="mb-0">
                
                <!-- Accordion card -->
                

                <?php $__currentLoopData = $religiosos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $edif): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card">

                  <!-- Card header -->
                  <div class="card-header" role="tab" id="heading4">
                    <a data-toggle="collapse" data-parent="#accordionEx1" href="<?php echo e('#id'.$edif->id); ?>" aria-expanded="true"
                      aria-controls="collapse4">
                      <h4 class="text-center mb-0 mt-3 red-text">
                        <?php echo e($edif->nombre); ?> <i class="fa fa-angle-down rotate-icon fa-2x"></i>
                      </h4>
                    </a>
                  </div>

                  <!-- Card body -->

                  <div id="<?php echo e('id'.$edif->id); ?>" class="collapse" role="tabpanel" aria-labelledby="heading4" data-parent="#accordionEx1">
                    <div class="card-body pt-0">
                      <p><?php echo e($edif->descripcion); ?></p>
                    </div>
                  </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
                <!--/.Accordion wrapper-->
        

            </div>
        
        <div class="col-md-4">
                <div class="accordion md-accordion accordion-3 z-depth-1-half" id="accordionEx3" role="tablist"
                aria-multiselectable="true">
                
                <ul class="list-unstyled d-flex justify-content-center pt-4 red-text">
                  <li><i class="fas fa-home mr-3 fa-4x" aria-hidden="true"></i></li>
                  <li><b><hr></b></li>
                  
                  
                </ul>
                
                <h2 class="text-center text-uppercase py-4 px-3">ARQUITECTURA CIVIL</h2>
                
                <hr class="mb-0">
                
                <!-- Accordion card -->
        

                <?php $__currentLoopData = $civiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $edif): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card">

                  <!-- Card header -->
                  <div class="card-header" role="tab" id="heading4">
                    <a data-toggle="collapse" data-parent="#accordionEx1" href="<?php echo e('#id'.$edif->id); ?>" aria-expanded="true"
                      aria-controls="collapse4">
                      <h4 class="text-center mb-0 mt-3 red-text">
                        <?php echo e($edif->nombre); ?> <i class="fa fa-angle-down rotate-icon fa-2x"></i>
                      </h4>
                    </a>
                  </div>

                  <!-- Card body -->

                  <div id="<?php echo e('id'.$edif->id); ?>" class="collapse" role="tabpanel" aria-labelledby="heading4" data-parent="#accordionEx1">
                    <div class="card-body pt-0">
                      <p><?php echo e($edif->descripcion); ?></p>
                    </div>
                  </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                </div>
                <!--/.Accordion wrapper-->
                

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>