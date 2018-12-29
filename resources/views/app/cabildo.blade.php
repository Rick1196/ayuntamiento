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

                                  <!-- Linkedin 
                                  <a class="px-2 fa-lg li-ic"><i class="fa fa-linkedin"></i></a>
                                  Twitter 
                                  <a class="px-2 fa-lg tw-ic"><i class="fa fa-twitter"></i></a>
                                  Dribbble 
                                  <a class="px-2 fa-lg fb-ic"><i class="fa fa-facebook"></i></a>
                                -->
                                </div>
                              
                              </div>
                              <!-- Card Wider -->
                </div>
                <div class="col-md-4"></div>
            </div><br>
            

      
@endsection