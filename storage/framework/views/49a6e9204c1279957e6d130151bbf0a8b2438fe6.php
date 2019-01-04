<?php $__env->startSection('content'); ?>
<br><br>
    <div class="container">
        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
        <div class="row">
            <div class="col-md-8"></div>
            <div class="col-md-4"><a href="/admin-posts" class="btn btn-primary">Administrar publicaciones</a></div><br><br>

        </div>
        <form action="<?php echo e(route('publicacion.up')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Seccion</label>
                <select class="custom-select my-1 mr-sm-2"name="seccion" id="seccion">
                    <?php $__currentLoopData = $sec; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seccion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($seccion->id); ?>"><?php echo e($seccion->descripcion); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php if($errors->has('seccion')): ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($errors->first('seccion')); ?></strong>
                    </span>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="titulo">Titulo</label>
                <input type="text" class="form-control" id="titulo" aria-describedby="Titulo" placeholder="Titulo" name="titulo">
                <?php if($errors->has('titulo')): ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($errors->first('titulo')); ?></strong>
                    </span>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="subtitulo">Subtitulo</label>
                <input type="text" class="form-control" id="subtitulo" aria-describedby="Subtitulo" placeholder="Subtitulo" name="subtitulo">
                <?php if($errors->has('titulo')): ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($errors->first('subtitulo')); ?></strong>
                    </span>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="contenido">Contenido</label>
                <textarea class="form-control" id="contenido" name="contenido" rows="5"></textarea>
            </div>

            <div class="form-group">
                <label for="link">Link</label>
                <input class="form-control" id="link" name="link" placeholder="https://www.youtube.com/embed/hQgvt-s-AHQ">
                <small id="linkHelp" class="form-text text-muted">Si desea insertar un link de youtube y no sabe como, visite:<a href="https://support.google.com/youtube/answer/171780?hl=es-419">Ayuda youtube</a></small>
                <?php if($errors->has('link')): ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($errors->first('link')); ?></strong>
                    </span>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="image">Imagen</label>
                <input type="file" name="image" id="image" class="form-control">
                <?php if($errors->has('image')): ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($errors->first('image')); ?></strong>
                    </span>
                <?php endif; ?>

            </div>
            <div class="row">
                <div class="form-group col-sm-4">
                    <button type="submit" class="btn btn-success">Publicar</button>
                </div>
                <div class="form-group col-sm-4">
                    <button type="reset" class="btn btn-danger">Cancelar</button>
                </div>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app_workers', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>