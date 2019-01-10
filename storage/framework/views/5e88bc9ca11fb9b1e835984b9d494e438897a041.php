

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials.title-head',['title' => 'INTEGRANTES DE CABILDO','subtitle'=>''], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <!-- SECCION NOTICIAS -->
          <h1 class="text-center text-danger">H. AYUNTAMIENTO DE TOLUCA</h1>
          <h3 class="text-center">Conócenos, estamos para servirte</h3>
         <!-- Card Wider -->
         <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-4 offset-md-4">
                        <div class="card card-cascade wider">
                                <!-- Card image -->
                                <div class="view view-cascade overlay">
                                  <img  class="card-img-top" src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3d/Juanro.jpg/220px-Juanro.jpg" alt="Card image cap">
                                  <a href="#!">
                                    <div class="mask rgba-white-slight"></div>
                                  </a>
                                </div>
                              
                                <!-- Card content -->
                                <div class="card-body card-body-cascade text-center">
                              
                                  <!-- Title -->
                                  <h4 class="card-title"><strong>JUAN RODOLFO</strong></h4>
                                  <!-- Subtitle -->
                                  <h5 class="blue-text pb-2"><strong>Alcalde Toluca de Lerdo</strong></h5>
                                  <!-- Text -->
                                  <p class="card-text">Ejerce la docencia de manera ininterrumpida en diversas universidades e instituciones de educación superior desde hace veinte años y ha sido socio fundador y miembro de diversas organizaciones de asistencia privada, académicas, empresariales y religiosas.  </p>

                                  <a class="px-2 fa-lg tw-ic" href="https://twitter.com/juanrodolfo_sg?lang=es" target="_blank"><i class="fab fa-twitter"></i></a>
                                  <a class="px-2 fa-lg tw-ic" href="https://www.facebook.com/H.AyuntamientoDeToluca/" target="_blank"><i class="fab fa-facebook"></i></a>
                                </div>
                              
                        </div>
                        <!-- Card Wider -->
                </div>
                <div class="col-md-4"></div>
            </div><br>
            <div class="container">
                <?php $__currentLoopData = $cabildo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $conjunto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="row">
                    <?php $__currentLoopData = $conjunto; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $persona): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div class="col-md-4">
                        <div class="card card-cascade wider">
                            <!-- Card image -->
                            <div class="view view-cascade overlay">
                              <?php if($persona->image_id): ?>
                               <img  class="card-img-top" src="<?php echo e(asset('images/'.$persona->image->name)); ?>" alt="Card image cap">
                              <?php else: ?>
                              <img  class="card-img-top" src="<?php echo e(asset('img/user.jpg')); ?>" alt="Card image cap">
                              <?php endif; ?>
                              <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                              </a>
                            </div>
                          
                            <!-- Card content -->
                            <div class="card-body card-body-cascade text-center">
                          
                              <!-- Title -->
                              <h4 class="card-title"><strong><?php echo e($persona->nombre.' '); ?><?php echo e($persona->apellidos); ?></strong></h4>
                              <!-- Subtitle -->
                              <h5 class="blue-text pb-2"><strong><?php echo e($persona->desc_puesto); ?></strong></h5>
                              <!-- Text -->
                              <p class="card-text"><?php echo e($persona->descripcion); ?> </p>

                              <?php if($persona->twitter): ?>
                              <a class="px-2 fa-lg tw-ic" href="<?php echo e($persona->twitter); ?>" target="_blank"><i class="fab fa-twitter"></i></a>
                              <?php endif; ?>
                              <?php if($persona->facebook): ?>
                              <a class="px-2 fa-lg fb-ic" href="<?php echo e($persona->facebook); ?>" target="_blank"><i class="fab fa-facebook"></i></a>
                              <?php endif; ?>
                            
                            </div>
                          
                        </div>
                      </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div><br><br>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
            </div>
            

      
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>