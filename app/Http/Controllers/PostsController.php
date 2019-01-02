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
    public function getPosts()
    {
        return Post::all();
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
            'seccion' => 'required'
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