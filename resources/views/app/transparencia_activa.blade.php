@extends('layout.app')
@section('content')
<br><br><br><br>
<div class="container">
    <p>
    <button class="btn btn-light btn-lg btn-block" type="button" data-toggle="collapse" data-target="#C1" aria-expanded="false" aria-controls="collapseExample">
        CONSEJO NACIONAL DE ARMONIZACION CONTABLE (CONAC)
    </button>
    </p>
    <div class="collapse" id="C1">
        <div class="card card-body">
            <a class="btn btn-light btn-lg btn-block" href="{{asset('/transparencia/Ley_general_Gubernamental.pdf')}}">
                LEY GENERAL DE CONTABILIDAD GUBERNAMENTAL
            </a>
            <button class="btn btn-light btn-lg btn-block" type="button" data-toggle="collapse" data-target="#C11" aria-expanded="false" aria-controls="collapseExample">
                AVANCE TRIMESTRAL DE LAS NORMAS DE OPERACION DEL CONSEJO NACIONAL DE ARMONIZACION CONTABLE
            </button>
            <div class="collapse" id="C11">
                <iframe  src="http://transparencia.toluca.gob.mx/sitios/transparencia/avance.php" style="width:100%; height:1024px; display:block; margin:0 auto;"   ></iframe> 
            </div>
            <button class="btn btn-light btn-lg btn-block" type="button" data-toggle="collapse" data-target="#C12" aria-expanded="false" aria-controls="collapseExample">
                POSICION ANALITICA DEL CONAC DE ESTADOS FINANCIEROS MENSUAL
            </button>
            <div class="collapse" id="C12">
                <iframe  src="http://transparencia.toluca.gob.mx/sitios/transparencia/posicion2014.php" style="width:100%; height:1024px; display:block; margin:0 auto;"   ></iframe> 
            </div>
            <a class="btn btn-light btn-lg btn-block" href="{{asset('/transparencia/Cumplimiento_ley_FISM.pdf')}}">
                CUMPLIMIENTO A LA LEY DE COORDINACION FISAL. OBRAS CON RECURSOS FISM
            </a>
            <button class="btn btn-light btn-lg btn-block" type="button" data-toggle="collapse" data-target="#C13" aria-expanded="false" aria-controls="collapseExample">
                PRESUPUESTO
            </button>
            <div class="collapse" id="C13">
                <iframe  src="http://transparencia.toluca.gob.mx/sitios/transparencia/presupuesto.php" style="width:100%; height:1024px; display:block; margin:0 auto;"   ></iframe>
            </div>
            <button class="btn btn-light btn-lg btn-block" type="button" data-toggle="collapse" data-target="#C14" aria-expanded="false" aria-controls="collapseExample">
                LEY DE DISCIPLINA FINANCIERA DE LAS ENTIDADES FEDERATIVAS Y MUNICIPALES
            </button>
            <div class="collapse" id="C14">
                <iframe  src="http://transparencia.toluca.gob.mx/sitios/transparencia/leydfefm.php" style="width:100%; height:1024px; display:block; margin:0 auto;"   ></iframe> 
            </div>        
        </div>
    </div>
    <p>
    <button class="btn btn-light btn-lg btn-block" type="button" data-toggle="collapse" data-target="#C2" aria-expanded="false" aria-controls="collapseExample">
        CUENTA PUBLICA MUNICIPAL
    </button>
    </p>
    <div class="collapse" id="C2">
        <div class="card card-body">
        <button class="btn btn-light btn-lg btn-block" type="button" data-toggle="collapse" data-target="#C21" aria-expanded="false" aria-controls="collapseExample">
                CUENTA PUBLICA
            </button>
            <div class="collapse" id="C21">
            <iframe  src="http://transparencia.toluca.gob.mx/sitios/transparencia/cuenta_publica.php" style="width:100%; height:1024px; display:block; margin:0 auto;"   ></iframe>
            </div>
        </div>
    </div>
    <p>
    <button class="btn btn-light btn-lg btn-block" type="button" data-toggle="collapse" data-target="#C3" aria-expanded="false" aria-controls="collapseExample">
        UNIDAD DE TRANSPARENCIA
    </button>
    </p>
    <div class="collapse" id="C2">
        <div class="card card-body">
            <button class="btn btn-light btn-lg btn-block" type="button" data-toggle="collapse" data-target="#C31" aria-expanded="false" aria-controls="collapseExample">
                ACTAS DEL COMITE DE TRANSPARENCIA
            </button>
            <div class="collapse" id="C31">
                <iframe  src="http://transparencia.toluca.gob.mx/sitios/transparencia/actas.php" style="width:100%; height:1024px; display:block; margin:0 auto;"   ></iframe>
            </div>
            <button class="btn btn-light btn-lg btn-block" type="button" data-toggle="collapse" data-target="#C32" aria-expanded="false" aria-controls="collapseExample">
                INFORME ANUAL DEL COMITE DE TRANSPARENCIA
            </button>
            <div class="collapse" id="C32">
                <iframe  src="http://transparencia.toluca.gob.mx/sitios/transparencia/actividades.php" style="width:100%; height:1024px; display:block; margin:0 auto;"   ></iframe>
            </div>
            <button class="btn btn-light btn-lg btn-block" type="button" data-toggle="collapse" data-target="#C33" aria-expanded="false" aria-controls="collapseExample">
                PROGRAMA DE SISTEMATIZACION Y  DE ACTUALIZACION  DE INFORMACION
            </button>
            <div class="collapse" id="C33">
                <iframe  src="http://transparencia.toluca.gob.mx/sitios/transparencia/psai.php" style="width:100%; height:1024px; display:block; margin:0 auto;"   ></iframe> 
            </div>
        </div>
    </div>
    <p>
    <button class="btn btn-light btn-lg btn-block" type="button" data-toggle="collapse" data-target="#C4" aria-expanded="false" aria-controls="collapseExample">
        TRANSPARENCIA ACTIVA
    </button>
    </p>
    <div class="collapse" id="C4">
        <div class="card card-body">
            <button class="btn btn-light btn-lg btn-block" type="button" data-toggle="collapse" data-target="#C41" aria-expanded="false" aria-controls="collapseExample">
                RECURSOS FINANCIEROS
            </button>
            <div class="collapse" id="C41">
                <iframe  src="http://transparencia.toluca.gob.mx/sitios/transparencia/ejercicio_fiscal.php" style="width:100%; height:1024px; display:block; margin:0 auto;"   ></iframe>
            </div>
            <button class="btn btn-light btn-lg btn-block" type="button" data-toggle="collapse" data-target="#C42" aria-expanded="false" aria-controls="collapseExample">
                RECURSOS MATERIALES Y PATRIMONIO
            </button>
            <div class="collapse" id="C42">
                <iframe  src="http://transparencia.toluca.gob.mx/sitios/transparencia/inventario.php" style="width:100%; height:1024px; display:block; margin:0 auto;"   ></iframe>
            </div>
            <button class="btn btn-light btn-lg btn-block" type="button" data-toggle="collapse" data-target="#C43" aria-expanded="false" aria-controls="collapseExample">
                QUE HACE LA ADMINISTRACION PUBLICA?
            </button>
            <div class="collapse" id="C43">
                <div class="card card-body">
                <a class="btn btn-light btn-lg btn-block" href="{{asset('/transparencia/manual_operacion.pdf')}}">
                    MANUAL DE OPERACION DEL COMITE DE SELECCION DOCUMENTAL DEL MUNICIPIO DE TOLUCA
                </a>
                <button class="btn btn-light btn-lg btn-block" type="button" data-toggle="collapse" data-target="#C431" aria-expanded="false" aria-controls="collapseExample">
                    PROGRAMA ESPECIFICO DE PROTECCION CIVIL
                </button>
                <div class="collapse" id="C431">
                    <iframe  src="http://transparencia.toluca.gob.mx/sitios/transparencia/pcivil.php" style="width:100%; height:1024px; display:block; margin:0 auto;"   ></iframe> 
                </div>
                <button class="btn btn-light btn-lg btn-block" type="button" data-toggle="collapse" data-target="#C432" aria-expanded="false" aria-controls="collapseExample">
                    ACUERDOS DE LA GACETA MUNICIPAL
                </button>
                <div class="collapse" id="C432">
                   <iframe  src="http://transparencia.toluca.gob.mx/sitios/transparencia/acuerdosgaceta.php" style="width:100%; height:1024px; display:block; margin:0 auto;"   ></iframe>
                </div>
            </div>
            </div>
        </div>
    </div>
    <p>
    <button class="btn btn-light btn-lg btn-block" type="button" data-toggle="collapse" data-target="#C5" aria-expanded="false" aria-controls="collapseExample">
        CODIGO DE ETICA
    </button>
    </p>
    <div class="collapse" id="C5">
        <div class="card card-body">
            <a class="btn btn-light btn-lg btn-block" href="{{asset('/transparencia/PlanDesarrolloPrincipios.pdf')}}">
            PLAN DE DESARROLLO MUNICIPAL DE TOLUCA 2016-2018
            </a>
            <a class="btn btn-light btn-lg btn-block" href="{{asset('/transparencia/ccdT.pdf')}}">
            CÓDIGO DE CONDUCTA Y ÉTICA PARA LOS(AS) SERVIDORES(AS) PÚBLICOS(AS) DEL AYUNTAMIENTO DE TOLUCA, ADMINISTRACIÓN 2013-2015
            </a>
        </div>
    </div>
</div>
@endsection