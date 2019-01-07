
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials.title-head',['title' => 'COMUNICADOS DE PRENSA','subtitle'=>'NOTICIAS RELEVANTES'], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="container">
<div class="container">
  <div class="row" style="border-bottom:3px solid red;">
    <div class="col-md-4">
        <div class="alert alert-danger" role="alert">
            Mas recientes
          </div>          
    </div>
    <div class="col-md-8">

    </div>
  </div>
</div><br>
<div class="container">
    <div class="card-columns">
      <?php $__currentLoopData = $ultimas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nota): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card">
          <?php if($nota->image): ?>
            <img class="card-img-top" src="<?php echo e(asset('images/'.$nota->image->name)); ?>" alt="Card image cap">
          <?php else: ?>
            <img class="card-img-top" src="<?php echo e(asset('img/1.png')); ?>" alt="Card image cap">
            <?php endif; ?>
          <div class="card-body">
            <p class="text-center"><h2 class="card-title"><?php echo e($nota->titulo); ?></h2></p>
            <h4 class="card-text"><?php echo e($nota->subtitulo); ?></h4>
            <button data-toggle="modal" onclick="fillModal(<?php echo e($nota); ?>)" data-target="#exampleModal" class="btn btn-primary">Leer</button>
          </div>
      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div><br><br>

<div class="container" style="border-bottom:3px solid red;">
  <div class="row">
    <div class="col-md-4">
        <div class="alert alert-danger" role="alert">
            Mas Relevantes
          </div>          
    </div>
    <div class="col-md-8">

    </div>
  </div>
</div><br>

<div class="container">
    <div class="card-columns">
      <?php $__currentLoopData = $relevantes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nota): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card">
          <?php if($nota->image): ?>
            <img class="card-img-top" src="<?php echo e(asset('images/'.$nota->image->name)); ?>" alt="Card image cap">
          <?php else: ?>
            <img class="card-img-top" src="<?php echo e(asset('img/1.png')); ?>" alt="Card image cap">
            <?php endif; ?>
          <div class="card-body">
            <p class="text-center"><h2 class="card-title"><?php echo e($nota->titulo); ?></h2></p>
            <h4 class="card-text"><?php echo e($nota->subtitulo); ?></h4>
            <button data-toggle="modal"  data-target="#exampleModal" class="btn btn-primary" onclick="fillModal(<?php echo e($nota); ?>)" >Leer</button>
          </div>
      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div><br><br>
<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="tit"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div>
            <h6 id="sub"></h6>
          </div><br><br>
          <img class="img-fluid" id="img" style="max-width:100%"><br><br>
          <div id="contenido">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Terminar de leer</button>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<script>
  function fillModal(content){
    document.getElementById("contenido").innerHTML = content.contenido;
    document.getElementById("sub").innerHTML = content.subtitulo;
    document.getElementById("tit").innerHTML = content.titulo;
    img = document.getElementById('img')
    img.src = "/images/"+content.image.name;

  }
</script>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>