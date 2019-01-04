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
        <br><br>
        <div class="row">
            <div class="col-md-8"></div>
            <div class="col-md-4"><a href="{{route('registro')}}" class="btn btn-primary">Registrar usuario</a></div>
        </div><br><br>
        <admin-com></aadmin-com>

    </div>
@endsection