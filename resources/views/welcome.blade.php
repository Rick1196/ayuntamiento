@extends('layout.app')
@section('content')
<div  style="width:100vw"  ><br><br>
<div id="myCarousel" class="carousel slide"data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img style="max-width:100vw" class="first-slide img-fluid" src="{{asset('img/logo2m2.jpg')}}" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-right">
              <h1 class=" bg-dark text-white">Municipio de Toluca.</h1>
                <p  style="background-color:white; color: #85261e"> Cambios que generan bienestar para ti</p>
                <!--<p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>-->
              </div><br><br>
              <div class="carousel-caption d-noe d-d-block">
                <div style="position:relative;top: -160px;">
                  <img style="max-width:43%" class="img-fluid" src="{{asset('img/logoTolBlack.png')}}" height="170" width="300">
                </div>
                </div>
            </div>
          </div>
          @foreach($banner as $im)
            <div class="carousel-item">
              <img class="img-fluid" src="{{asset('images/'.$im->image->name)}}" alt="Second slide">
              <div class="container">
                <div class="carousel-caption text-right">
                  <h1 class=" bg-dark text-white">{{$im->titulo}}.</h1>
                  <p class=" bg-dark text-white">{{$im->subtitulo}}</p>
                  <p class=" bg-dark text-white">{{$im->contenido}}</p>
                  <p><a class="btn btn-lg btn-primary" target="_blank"  href="{{$im->link}}" role="button">Saber mas</a></p>
                </div>
              </div>
            </div>
          @endforeach
          
          
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <div class="container">
        <h3 class="text-redm">
        CONVOCATORIAS/
        <small class="text-muted">TEMAS DE INTERÉS</small>
        </h3><br><br>
      </div>
      <div>
      <div>
          <div>
              <img src="{{ asset('img/beca1.jpg') }}" style="max-width:100%;width: 100%" class="img-fluid img-responsive">
          </div>
          <div>
              <img src="{{ asset('img/beca2.jpg') }}" style="max-width:100%;width: 100%" class="img-fluid img-responsive" >
          </div>
          <div>
              <img src="{{ asset('img/beca3.jpg') }}" style="max-width:100%;width: 100%" class="img-fluid img-responsive">
          </div>
      </div>
      {{-- <div class="view">
        <img src="https://mdbootstrap.com/img/Photos/Others/nature-sm.jpg" class="img-fluid" alt="Image of ballons flying over canyons with mask pattern one.">
          <div class="mask pattern-1 flex-center waves-effect waves-light">
            <p class="white-text">.pattern-1</p>
          </div>
      </div> --}}
      
      <div class="row view" id="sectionlarge">
        <img class="img-fluid" src="{{ asset('img/volcan-min.jpg') }}">
      </div> <br><br>
      
      <div class="container">
        <h3 class="text-redm">
        ÚLTIMAS NOTICIAS<br>
        <small class="text-redm">Enterate de lo más relevante de nuestro municipio</small>
        </h3><br><br>
      </div>
      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing">
        <!-- start feedwind code --> <script type="text/javascript" src="https://feed.mikle.com/js/fw-loader.js" data-fw-param="98735/"></script> <!-- end feedwind code --> 

        <!-- Three columns of text below the carousel -->
        <!--
        <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle" src="https://via.placeholder.com/150C/O" alt="Generic placeholder image" width="140" height="140">
            <h2>NOTICIA 1</h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
            <p><a class="btn btn-primary" href="#" role="button">Leer más &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <!--
          <div class="col-lg-4">
            <img class="rounded-circle" src="https://via.placeholder.com/150C/O" alt="Generic placeholder image" width="140" height="140">
            <h2>NOTICIA 2</h2>
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
            <p><a class="btn btn-primary" href="#" role="button">Leer más &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <!--
          <div class="col-lg-4">
            <img class="rounded-circle" src="https://via.placeholder.com/150C/O" alt="Generic placeholder image" width="140" height="140">
            <h2>NOTICIA 3</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-primary" href="#" role="button">Leer más &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <!--
        </div><!-- /.row -->
        

        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        
      </div><!-- /.container -->
      <div class="row jumbotron" style="margin:0;">
         <div class="container">
        <h3 class="text-redm">
        TOLUCA TV<br>
        <small class="text-redm">Enterate de lo más relevante de nuestro municipio</small>
        </h3><br><br>

  @foreach($videos as $conjunto)
      <div class="card-deck">
          @foreach($conjunto as $video)
            <div class="card">
              <iframe class="embed-responsive-item" src="{{$video->link}}" allowfullscreen></iframe>
              <div class="card-body">
                <h5 class="card-title">{{$video->titulo}}</h5>
                <p class="card-text">{{$video->subtitulo}}</p>
                <p class="card-text">{{$video->contenido}}</p>
                <a class="btn btn-primary" href="{{$video->link}}">Ver</a>
              </div>
            </div>
          @endforeach
      </div><br><br>
  @endforeach    
  </div>
</div>
</div>
</div>




<div class="jumbotron jumbotron-fluid">
  <div class="container">
   <div class="row">
     <div class="col-md-4">
        <figure class="figure">
            <img src="{{ asset('img/edo.jpg') }}" style="height:150px; width:200px;" class="figure-img img-fluid" alt="Edo. Mex.">
        </figure>
     </div>
     <div class="col-md-4">
        <figure class="figure">
            <img src="{{ asset('img/conagua.jpg') }}" style="height:100px; width:200px;" class="figure-img img-fluid" alt="Edo. Mex.">
        </figure>
      </div>
   </div>
  </div>
</div>

</div>
    
@endsection
