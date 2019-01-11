<header>
    <nav class="navbar navbar-expand-md navbar-light fixed-top" style="background-color: #641c34;">
      <a class="navbar-brand" href="#">
        <img src="<?php echo e(asset('img/icon.png')); ?>" width="90" height="90" alt="TOLUCA">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
        <ul class="nav navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="/">H. AYUNTAMIENTO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/cabildo">CABILDO</a>
        </li>
        <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              PRENSA
          </a>

          <a class="nav-link" href="/prensa"></a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="<?php echo e(route('app.prensa')); ?>">
                    Noticias
                  </a>
          </div>
        </li>
        <!--
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(route('app.dependencias')); ?>">DEPENDENCIAS</a>
        </li>-->
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(route('tramites.servicios')); ?>">TRÁMITES Y SERVICIOS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/toluca">NUESTRO MUNICIPIO</a>
        </li>
        <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              TRANSPARENCIA
          </a>

          <a class="nav-link" href="/transaperencia"></a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="/transparencia_ipomex">
                    IPOMEX
                  </a>
                  <a class="dropdown-item" href="/documentos_publicos">
                     DOCUMENTOS PUBLICOS
                  </a>
                  <a class="dropdown-item" href="/transparencia_activa">
                      TRANSPARENCIA ACTIVA
                  </a>
                  <a class="dropdown-item" href="<?php echo e(route('app.licitaciones')); ?>">
                      LICITACIONES
                  </a>
                  <?php if(auth()->guard()->guest()): ?>
                  <?php else: ?>
                  <a class="dropdown-item" href="/docs_pub">
                     ADMINISTRAR DOCUMENTOS PUBLICOS
                  </a>
                  <?php endif; ?>
          </div>
        </li>
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                CONTACTO
            </a>
  
            <a class="nav-link" href="/contacto"></a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?php echo e(route('app.contacto')); ?>">
                      CONTACTO
                    </a>
            </div>
        </li>
        <?php if(auth()->guard()->guest()): ?>
        <?php else: ?>
          <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="<?php echo e(route('admin.posts')); ?>">
                      Administrar publicaciones
                  </a>
                  <a class="dropdown-item" href="<?php echo e(route('admin.noticias')); ?>">
                      Administrar prensa
                  </a>
                  <a class="dropdown-item" href="<?php echo e(route('admin.sitios')); ?>">
                      Administrar directorio turistico
                  </a>
                  <a class="dropdown-item" href="<?php echo e(route('admin.cabildo')); ?>">
                      Administrar cabildo
                  </a>
                  <?php if(Auth::user()->hasRole('admin')): ?>
                      <a class="dropdown-item" href="<?php echo e(route('administracion')); ?>">
                          Administrar usuario
                      </a>
                  <?php endif; ?>
                  <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                      onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                      <?php echo e(__('Logout')); ?>

                  </a>

                  <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                      <?php echo csrf_field(); ?>
                  </form>
              </div>
          </li>
        <?php endif; ?>
        </ul>
        <!-- <form class="form-inline mt-2 mt-md-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form> -->
      </div>
    </nav>
  </header>