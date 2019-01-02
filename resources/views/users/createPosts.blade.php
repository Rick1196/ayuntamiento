@extends('layout.app_workers')
@section('content')
<br><br>
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('publicacion.up') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="seccion">Seccion</label>
                <select name="seccion" id="seccion">
                    @foreach($sec as $seccion)
                    <option value="{{$seccion->id}}">{{$seccion->descripcion}}</option>
                    @endforeach
                </select>
                @if ($errors->has('seccion'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('seccion') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="titulo">Titulo</label>
                <input type="text" class="form-control" id="titulo" aria-describedby="Titulo" placeholder="Titulo" name="titulo">
                @if ($errors->has('titulo'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('titulo') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="subtitulo">Subtitulo</label>
                <input type="text" class="form-control" id="subtitulo" aria-describedby="Subtitulo" placeholder="Subtitulo" name="subtitulo">
                @if ($errors->has('titulo'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('subtitulo') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="contenido">Contenido</label>
                <textarea class="form-control" id="contenido" name="contenido" rows="5"></textarea>
            </div>

            <div class="form-group">
                <label for="link">Link</label>
                <textarea class="form-control" id="link" name="link" rows="5"></textarea>
                @if ($errors->has('link'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('link') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="image">Imagen</label>
                <input type="file" name="image" id="image" class="form-control">
                @if ($errors->has('image'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('image') }}</strong>
                    </span>
                @endif

            </div>
            <div class="row">
                <div class="form-group col-sm-4">
                    <button type="submit" class="btn btn-success">Publicar</button>
                </div>
                <div class="form-group col-sm-4">
                    <button type="reset" class="btn btn-danger">Cancelar</button>
                </div>
            </div>
        </form>
    </div>
@endsection