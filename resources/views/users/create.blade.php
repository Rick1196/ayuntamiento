@extends('layout.app_workers')
@section('content')
<br><br>
    <div class="container">
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
        @endif
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div> 
        @endif
        <form method="post" action="{{url('file')}}" enctype="multipart/form-data">
            {{csrf_field()}}

            <div class="input-group control-group increment" >
            <input type="file" name="file" class="form-control">
            </div>
            <br>
            <button type="submit" class="btn btn-primary" style="margin-top:10px">Subir</button>
        </form>
        <div class="table-responsive-xl">
            <table class="table">
                <thead>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Opciones</th>
                </thead>
                <tbody>
                    @foreach($archivos as $archivo)
                    <tr>
                        <th>{{$loop->index +1}}</th>
                        <td>{{$archivo->original_filename}}</td>
                        <td>{{$archivo->created_at}}</td>
                        <td><a href="{{ asset('files/'.$archivo->filename) }}" class="btn btn-primary">Ver</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection


