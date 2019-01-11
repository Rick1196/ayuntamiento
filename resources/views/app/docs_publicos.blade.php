@extends('layout.app')
@section('content')
<br><br><br><br>
    <div class="container">
        <p class="text-centered"><h1>Documentos de Acceso a la Información Pública de Oficio</h1></p>
    <div class="table-responsive-xl">
            <table class="table">
                <tbody>
                    @foreach($archivos as $archivo)
                    <tr>
                        <td>{{$archivo->descripcion}}</td>
                        <td>{{$archivo->created_at}}</td>
                        <td><a href="{{ asset('/files/'.$archivo->file->filename) }}" class="btn btn-primary">Ver</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection