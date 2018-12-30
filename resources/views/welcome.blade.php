@extends('layout.app')
@section('content')
<div style="max-width: 100%; ">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" id="uno" src="https://a.travel-assets.com/findyours-php/viewfinder/images/res60/201000/201880-Toluca-Cathedral.jpg" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>Municipio de Toluca.</h1>
                <p>Cambios que generan tu bienestar</p>
                <!--<p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>-->
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Another example headline.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right">
                <h1>One more for good measure.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
              </div>
            </div>
          </div>
        </div>
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
      
      <div class="row">
        <div class="col-sm-12 col-md-6" id="unoslide">
          <img src="{{ asset('img/beca1.jpg') }}" class="img-flui t">
        </div>
        <div class="col-md-6 col-sm-12">
          <div class="row">
            <div class="col-md-6 col-sm-12" >
              <img src="{{ asset('img/beca2.jpg') }}" class="img-fluid" id="dosslid" >
            </div>
          </div>
          <div class="row">
            <div class="col-md-6" >
              <img src="{{ asset('img/beca3.jpg') }}" class="img-fluid" id="tresslid">
            </div>
          </div>
        </div>
      </div>
      {{-- <div class="view">
        <img src="https://mdbootstrap.com/img/Photos/Others/nature-sm.jpg" class="img-fluid" alt="Image of ballons flying over canyons with mask pattern one.">
          <div class="mask pattern-1 flex-center waves-effect waves-light">
            <p class="white-text">.pattern-1</p>
          </div>
      </div> --}}
      
      <div class="parallax-window" data-parallax="scroll" data-image-src="{{ asset('img/volcan-min.jpg') }}"></div>
      <div class="row view"  id="sectionlarge">
        <img src="{{ asset('img/volcan-min.jpg') }}">
        <div class="mask pattern-1 flex-center waves-effect waves-light">
                <p class="white-text">NEVADO TOLUCA</p>
              </div>
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

        <div class="card-deck">
  <div class="card">
    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    
  </div>
  <div class="card">
    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    
  </div>
  <div class="card">
    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    
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