@extends('layout.app')
@section('content')
@include('partials.title-head',['title' => 'COMUNICADOS DE PRENSA','subtitle'=>'NOTICIAS RELEVANTES'])
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
      @foreach($ultimas as $nota)
        <div class="card">
          @if($nota->image)
            <img class="card-img-top" src="{{asset('images/'.$nota->image->name)}}" alt="Card image cap">
          @else
            <img class="card-img-top" src="{{asset('img/1.png')}}" alt="Card image cap">
            @endif
          <div class="card-body">
            <p class="text-center"><h2 class="card-title">{{$nota->titulo}}</h2></p>
            <h4 class="card-text">{{$nota->subtitulo}}</h4>
            <button data-toggle="modal" onclick="fillModal({{$nota}})" data-target="#exampleModal" class="btn btn-primary">Leer</button>
          </div>
      </div>
    @endforeach
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
      @foreach($relevantes as $nota)
        <div class="card">
          @if($nota->image)
            <img class="card-img-top" src="{{asset('images/'.$nota->image->name)}}" alt="Card image cap">
          @else
            <img class="card-img-top" src="{{asset('img/1.png')}}" alt="Card image cap">
            @endif
          <div class="card-body">
            <p class="text-center"><h2 class="card-title">{{$nota->titulo}}</h2></p>
            <h4 class="card-text">{{$nota->subtitulo}}</h4>
            <button data-toggle="modal"  data-target="#exampleModal" class="btn btn-primary" onclick="fillModal({{$nota}})" >Leer</button>
          </div>
      </div>
    @endforeach
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
@endsection
<script>
  function fillModal(content){
    document.getElementById("contenido").innerHTML = content.contenido;
    document.getElementById("sub").innerHTML = content.subtitulo;
    document.getElementById("tit").innerHTML = content.titulo;
    img = document.getElementById('img')
    img.src = "/images/"+content.image.name;

  }
</script>