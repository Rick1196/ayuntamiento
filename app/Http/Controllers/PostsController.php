<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use View;
use App\Post;
use App\Secciones;
use App\Image;  

use DB;
class PostsController extends Controller{
    public function getSecciones(){
        return Secciones::all();
    }

    public function getPosts(Request $data)
    {
        $filtro = $data['filtro'];
        if($filtro == 'todos'){
            return Post::with('image')->orderBy('created_at', 'desc')->paginate(5);
        }
        elseif($filtro == 'carousel'){
            $seccion = Secciones::where('nombre',$filtro)->first();
            return Post::with('image')->where('seccion_id',$seccion->id)->orderBy('created_at', 'desc')->paginate(5);
        }
        elseif($filtro == 'convocatorias'){
            $seccion = Secciones::where('nombre',$filtro)->first();
            return Post::with('image')->where('seccion_id',$seccion->id)->orderBy('created_at', 'desc')->paginate(5);
        }
        elseif($filtro == 'tv'){
            $seccion = Secciones::where('nombre',$filtro)->first();
            return Post::with('image')->where('seccion_id',$seccion->id)->orderBy('created_at', 'desc')->paginate(5);
        }
    }


    public function inicio(){
        $seccion = Secciones::where('nombre','carousel')->first();
        $banner = Post::with('image')->where('seccion_id',$seccion->id)->where('activado',true)->orderBy('created_at', 'desc')->get();
        $seccion = Secciones::where('nombre','tv')->first();
        $tv = Post::with('image')->where('seccion_id',$seccion->id)->where('activado',true)->orderBy('created_at', 'desc')->get();
        $videos = array();
        $temp = array();
        $cont = 1;
        foreach ($tv as $evento) {
            if($cont % 3 == 0){
                array_push($temp, $evento);
                array_push($videos, $temp);
                $temp = array();
            }else{
                array_push($temp, $evento);
            }
            $cont = $cont + 1; 
        }
        array_push($videos, $temp);
        return View::make("welcome", compact('banner','videos'));
    }

    public function activar(Request $data){
        DB::table('posts')
            ->where('id', $data['id'])
            ->update(['activado' => true]);
    }

    public function desactivar(Request $data){
        DB::table('posts')
            ->where('id', $data['id'])
            ->update(['activado' => false]);
    }

    public function delete(Request $data){
        DB::table('posts')
            ->where('id', $data['id'])
            ->delete();
    }

    public function index()
    {
        $sec = Secciones::all();
        return View::make("users/createPosts", compact('sec'));
    }

    public function admin()
    {
        $mensaje = '';
        return View::make("users/adminPosts",compact('mensaje'));
    }

    public function createPost(){
        $messages = [
            'required' => 'El campo :attribute  es requerido.',
            'image' => 'El archivo debe ser una imagen',
            'mimes' => 'Formatos soportados jpeg,png, jpg, gif, svb',
            'max' => 'Peso maximo de 2 megas'
        ];
        $rules = [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'titulo' => 'required',
            'subtitulo' => 'required',
            'seccion' => 'required',
            'link' => 'required'
        ];
        
        $this->validate(request(), $rules, $messages);
        $nuevo = new Post();
        $nuevo->titulo = request()->titulo;
        $nuevo->subtitulo = request()->subtitulo;
        if(request()->contenido == '' or request()->contenido == NULL){
            $nuevo->contenido = '';
        }else{
            $nuevo->contenido = request()->contenido;
        }
        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        //$imageName = request()->image->getClientOriginalName().'.'.request()->image->getClientOriginalExtension();  
        request()->image->move(public_path('images'), $imageName);
        $image = new Image();
        $image->name = $imageName;
        $image->original_name = request()->image->getClientOriginalName();
        $image->save();  
        $nuevo->image()->associate($image);
        $sec = Secciones::where('id',request()->seccion)->first();
        $nuevo->seccion()->associate(request()->seccion);
        $nuevo->link = request()->link;
        $nuevo->save();
        $mensaje = 'Post creado exitosamente';
        return View::make("users/adminPosts",compact('mensaje'));
    }
}