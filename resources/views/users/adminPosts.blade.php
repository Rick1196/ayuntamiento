@extends('layout.app_workers')
@section('content')
<br><br>
    <div class="container">
        @if ($mensaje != '')
            <div class="alert alert-success alert-block">
            
                <button type="button" class="close" data-dismiss="alert">×</button>
            
                    <strong>{{ $mensaje }}</strong>
            
            </div>
        
        @endif
        <div class="row">
            <div class="col-md-8"></div>
            <div class="col-md-4"><button class="btn btn-primary">Crear publicacion</button></div>
        </div>

    </div>
@endsection