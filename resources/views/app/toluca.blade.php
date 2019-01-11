@extends('layout.app')
@section('content')
@include('partials.title-head',['title' => 'NUESTRO MUNICIPIO','subtitle'=>''])
<div class="container">
<h3 class="red-text">
    <strong >DIRECTORIO TURÍSTICO</strong>
    <small class="text-muted">TOLUCA</small>
</h3><b><hr style="border-top: 3px solid red;"></b><br>
<div class="row">
        {{-- First Card --}}
<div class="col-md-4">
<!--Accordion wrapper-->
<div class="accordion md-accordion accordion-3 z-depth-1-half" id="accordionEx1" role="tablist"
aria-multiselectable="true">


<ul class="list-unstyled d-flex justify-content-center pt-4 red-text">
  <li><i class="fa fa-building mr-3 fa-4x" aria-hidden="true"></i></li>
  <li><b><hr></b></li>
  {{-- <li><i class="fa fa-life-saver mr-3 fa-2x" aria-hidden="true"></i></li> --}}
  {{-- <li><i class="fa fa-star-o fa-2x" aria-hidden="true"></i></li> --}}
</ul>

<h2 class="text-center text-uppercase py-4 px-3">EDIFICIOS GUBERNAMENTALES</h2>

<hr class="mb-0">

<!-- Accordion card -->

<div class="card">


</div>
@foreach($gob as $edif)
<div class="card">

  <!-- Card header -->
  <div class="card-header" role="tab" id="heading4">
    <a data-toggle="collapse" data-parent="#accordionEx1" href="{{'#id'.$edif->id}}" aria-expanded="true"
      aria-controls="collapse4">
      <h4 class="text-center mb-0 mt-3 red-text">
        {{$edif->nombre}} <i class="fa fa-angle-down rotate-icon fa-2x"></i>
      </h4>
    </a>
  </div>

  <!-- Card body -->

  <div id="{{'id'.$edif->id}}" class="collapse" role="tabpanel" aria-labelledby="heading4" data-parent="#accordionEx1">
    <div class="card-body pt-0">
      <p>{{$edif->descripcion}}</p>
    </div>
  </div>
</div>
@endforeach
<!-- Accordion card -->
</div>
<!--/.Accordion wrapper-->


        </div>
        {{-- Second CARD --}}
        <div class="col-md-4">
                <div class="accordion md-accordion accordion-3 z-depth-1-half" id="accordionEx2" role="tablist"
                aria-multiselectable="true">
                
                <ul class="list-unstyled d-flex justify-content-center pt-4 red-text">
                  <li><i class="fas fa-church mr-3 fa-4x" aria-hidden="true"></i></li>
                  <li><b><hr></b></li>
                  {{-- <li><i class="fa fa-life-saver mr-3 fa-2x" aria-hidden="true"></i></li> --}}
                  {{-- <li><i class="fa fa-star-o fa-2x" aria-hidden="true"></i></li> --}}
                </ul>
                
                <h2 class="text-center text-uppercase py-4 px-3">ARQUITECTURA RELIGIOSA</h2>
                
                <hr class="mb-0">
                
                <!-- Accordion card -->
                

                @foreach($religiosos as $edif)
                <div class="card">

                  <!-- Card header -->
                  <div class="card-header" role="tab" id="heading4">
                    <a data-toggle="collapse" data-parent="#accordionEx1" href="{{'#id'.$edif->id}}" aria-expanded="true"
                      aria-controls="collapse4">
                      <h4 class="text-center mb-0 mt-3 red-text">
                        {{$edif->nombre}} <i class="fa fa-angle-down rotate-icon fa-2x"></i>
                      </h4>
                    </a>
                  </div>

                  <!-- Card body -->

                  <div id="{{'id'.$edif->id}}" class="collapse" role="tabpanel" aria-labelledby="heading4" data-parent="#accordionEx1">
                    <div class="card-body pt-0">
                      <p>{{$edif->descripcion}}</p>
                    </div>
                  </div>
                </div>
                @endforeach

                </div>
                <!--/.Accordion wrapper-->
        

            </div>
        {{-- THIRD CARD --}}
        <div class="col-md-4">
                <div class="accordion md-accordion accordion-3 z-depth-1-half" id="accordionEx3" role="tablist"
                aria-multiselectable="true">
                
                <ul class="list-unstyled d-flex justify-content-center pt-4 red-text">
                  <li><i class="fas fa-home mr-3 fa-4x" aria-hidden="true"></i></li>
                  <li><b><hr></b></li>
                  {{-- <li><i class="fa fa-life-saver mr-3 fa-2x" aria-hidden="true"></i></li> --}}
                  {{-- <li><i class="fa fa-star-o fa-2x" aria-hidden="true"></i></li> --}}
                </ul>
                
                <h2 class="text-center text-uppercase py-4 px-3">ARQUITECTURA CIVIL</h2>
                
                <hr class="mb-0">
                
                <!-- Accordion card -->
        

                @foreach($civiles as $edif)
                <div class="card">

                  <!-- Card header -->
                  <div class="card-header" role="tab" id="heading4">
                    <a data-toggle="collapse" data-parent="#accordionEx1" href="{{'#id'.$edif->id}}" aria-expanded="true"
                      aria-controls="collapse4">
                      <h4 class="text-center mb-0 mt-3 red-text">
                        {{$edif->nombre}} <i class="fa fa-angle-down rotate-icon fa-2x"></i>
                      </h4>
                    </a>
                  </div>

                  <!-- Card body -->

                  <div id="{{'id'.$edif->id}}" class="collapse" role="tabpanel" aria-labelledby="heading4" data-parent="#accordionEx1">
                    <div class="card-body pt-0">
                      <p>{{$edif->descripcion}}</p>
                    </div>
                  </div>
                </div>
                @endforeach


                </div>
                <!--/.Accordion wrapper-->
                

            </div>
        </div>
    </div>
</div>
@endsection