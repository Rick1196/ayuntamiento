@extends('layout.app')
@section('content')
<div class="row view"  id="sectionlarge">
    <img src="{{ asset('img/volcan-min.jpg') }}">
    <div class="mask pattern-1 flex-center waves-effect waves-light">
        <p class="white-text"><h1>CONTACTO</h1></p>
    </div>
</div> <br><br>
<div class="container">
    <div class="row">
        <div class="col-sm">
            <div class="alert alert-danger" role="alert">
                <p class="mb-0">
                    <div class="row">
                        <div class="col-sm-1">
                            <h3><i class="fas fa-phone"></i></h3>
                        </div>
                        <div class="col-sm-11">
                            <h2>  
                            722 276 19 00
                            </h2>
                        </div>
                    </div>   
                </p>
                <hr>
                <p class="mb-0">
                    <div class="row">
                        <div class="col-sm-1">
                            <h3><i class="fas fa-envelope"></i></h3>
                        </div>
                        <div class="col-sm-11">
                            <h4>  
                            municipiotoluca@toluca.gob.mx
                            </h4>
                        </div>
                    </div>     
                </p>
                <hr>
                <p class="mb-0">
                    <div class="row">
                        <div class="col-sm-1">
                            <h3><i class="fas fa-map-marker-alt"></i></h3>
                        </div>
                        <div class="col-sm-11">
                            <h6>  
                            Av. Independencia Pte. #207
                            Col. Centro, Toluca, México.
                            H. Ayuntamiento de Toluca
                            2019 - 2021®
                            </h6>
                        </div>
                    </div>     
                </p>           
            </div>
        </div>
        <div class="col-sm">
            <form>
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Nombre completo">
                        </div>
                        <div class="col">
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="inputAddress" placeholder="Tema / Asunto">
                </div>
                <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1"  style="resize: none;" rows="4" placeholder="Mensaje"></textarea>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-8"></div>
                        <div class="col-sm-4">
                            <button type="submit" class="btn btn-danger rounded">Enviar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row view"  id="sectionlarge">
        <img id="myImg" class="img-fluid" src="{{ asset('img/loc.png') }}">
    </div> <br><br>
</div>


@endsection
