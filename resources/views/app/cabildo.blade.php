@extends('layout.app')

@section('content')
@include('partials.title-head',['title' => 'INTEGRANTES DE CABILDO','subtitle'=>''])
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
                                  <img  class="card-img-top" src="{{asset('img/presidente.jpg')}}" alt="Card image cap">
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
                @foreach($cabildo as $conjunto)
                <div class="row">
                    @foreach($conjunto as $persona)
                      <div class="col-md-4">
                        <div class="card card-cascade wider">
                            <!-- Card image -->
                            <div class="view view-cascade overlay">
                              @if($persona->image_id)
                               <img  class="card-img-top" src="{{asset('images/'.$persona->image->name)}}" alt="Card image cap">
                              @else
                              <img  class="card-img-top" src="{{asset('img/user.jpg')}}" alt="Card image cap">
                              @endif
                              <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                              </a>
                            </div>
                          
                            <!-- Card content -->
                            <div class="card-body card-body-cascade text-center">
                          
                              <!-- Title -->
                              <h4 class="card-title"><strong>{{$persona->nombre.' '}}{{$persona->apellidos}}</strong></h4>
                              <!-- Subtitle -->
                              <h5 class="blue-text pb-2"><strong>{{$persona->desc_puesto}}</strong></h5>
                              <!-- Text -->
                              <p class="card-text">{{$persona->descripcion}} </p>

                              @if($persona->twitter)
                              <a class="px-2 fa-lg tw-ic" href="{{$persona->twitter}}" target="_blank"><i class="fab fa-twitter"></i></a>
                              @endif
                              @if($persona->facebook)
                              <a class="px-2 fa-lg fb-ic" href="{{$persona->facebook}}" target="_blank"><i class="fab fa-facebook"></i></a>
                              @endif
                            
                            </div>
                          
                        </div>
                      </div>
                    @endforeach
                </div><br><br>
              @endforeach    
            </div>
            

      
@endsection