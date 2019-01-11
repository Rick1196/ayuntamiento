@extends('layout.app')

@section('content')
@include('partials.title-head',['title' => 'TRAMITES Y SERVICIOS','subtitle'=>''])
    <div class="container">
            <div class="container" style="border-bottom:3px solid red;">
                <div class="row">
                    <div class="col-md-6">
                        <div class="alert alert-danger" role="alert">
                                Buzón Infantil y adolescente siopinna toluca
                        </div>          
                    </div>
                    <div class="col-md-6">
                    </div>
                </div>
            </div><br>
            <div class="container">
                <center>
                    <img class="img-fluid border border-danger" src="{{asset('img/participa.png')}}" alt="">
                </center>
            </div><br><br>
            <div class="container" style="border-bottom:3px solid red;">
                <div class="row">
                    <div class="col-md-6">
                    </div>
                    <div class="col-md-6">
                        <div class="alert alert-danger" role="alert">
                                Pago del predial
                        </div>          
                    </div>
                </div>
            </div><br>
            <div class="container">
                <center>
                    <a href="https://sfpya.edomexico.gob.mx/recaudacion/faces/municipios/predial/FormatoPagoPredialResponsive.xhtml#!"> <img class="img-fluid border border-danger" src="{{asset('img/predial.png')}}" alt=""></a>
                </center>
            </div><br><br>
            <div class="container" style="border-bottom:3px solid red;">
                <div class="row">
                    <div class="col-md-6">
                        <div class="alert alert-danger" role="alert">
                                Pago del agua
                        </div>          
                    </div>
                    <div class="col-md-6">
                    </div>
                </div>
            </div><br>
            <div class="container">
                <center>
                    <a href="https://www.ayst.gob.mx/app/"><img  class="img-fluid border border-danger" src="{{asset('img/agua.png')}}" alt=""></a>
                </center>
            </div><br><br>
            <div class="container" style="border-bottom:3px solid red;">
                <div class="row">
                    <div class="col-md-6">
                    </div>
                    <div class="col-md-6">
                        <div class="alert alert-danger" role="alert">
                                Gestiones municipales
                        </div>          
                    </div>
                </div>
            </div><br>
            <div class="container">
                <center>
                    <a href="https://www.secogem.gob.mx/SAM/sit_atn_mex.asp"><img  class="img-fluid border border-danger" src="{{asset('img/gestiones.png')}}" alt=""></a>
                </center>
            </div><br><br>
    </div>
@endsection