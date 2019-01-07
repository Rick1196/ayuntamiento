<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticia;
use Validator;
use DB;
use View;
use App\Image;
class NoticiasController extends Controller
{   
    public function index(){
        $ultimas = Noticia::with('image')->orderBy('created_at', 'desc')->take(10)->get();
        $relevantes = Noticia::with('image')->orderBy('importancia', 'desc')->take(10)->get();
        return View::make("app.prensa", compact('ultimas','relevantes'));
    }

    public function deleteNoticia(Request $data){
        DB::table('noticias')
        ->where('id', $data['id'])
        ->delete();
    }

    public function getNoticias(Request $data){
        $filtro = $data['filtro'];
        if($filtro == 'todas'){
            return Noticia::with('image')->orderBy('created_at', 'desc')->paginate(5);
        }
        else{
            return Post::with('image')->where('created_at',$filtro)->orderBy('created_at', 'desc')->paginate(5);
        }
    }

    public function putNoticia(Request $data){
        //$noticia = $data['noticia'];
        $validator = $data->validate([
            'titulo' => 'required',
            'subtitulo' => 'required',
            'contenido' => 'required'
        ]);
        $id = $data['id'];
        $titulo = $data['titulo'];
        $subtitulo = $data['subtitulo'];
        $contenido = $data['contenido'];
        $importancia = $data['importancia'];
        DB::table('noticias')
            ->where('id', $id)
            ->update(['titulo' => $titulo,'subtitulo' => $subtitulo,'contenido' => $contenido, 'importancia' => $importancia]);
        if($data['image'])
        {
            $image = $data->get('image');
            $name = time().'.' . explode('/', explode(':', substr($image, 0, strpos($image, ';')))[1])[1];
            \Image::make($data->get('image'))->save(public_path('images/').$name);
            $nueva = new Image();
            $nueva->name = $name;
            $nueva->original_name = '';
            $nueva->save();  
            DB::table('noticias')
            ->where('id', $id)
            ->update(['image_id' => $nueva->id]);
        }
        return response()->json(['success' => 'Noticia editada exitosamente'], 200);
        
    }

    public function postNoticia(Request $data){
        //$noticia = $data['noticia'];
        $validator = $data->validate([
            'titulo' => 'required',
            'subtitulo' => 'required',
            'contenido' => 'required'
        ]);
        $noticia = new Noticia();
        $noticia->titulo = $data['titulo'];
        $noticia->subtitulo = $data['subtitulo'];
        $noticia->contenido = $data['contenido'];
        $noticia->importancia = $data['importancia'];
        if($data['image'])
        {
            $image = $data->get('image');
            $name = time().'.' . explode('/', explode(':', substr($image, 0, strpos($image, ';')))[1])[1];
            \Image::make($data->get('image'))->save(public_path('images/').$name);
            $nueva = new Image();
            $nueva->name = $name;
            $nueva->original_name = '';
            $nueva->save();  
            $noticia->image()->associate($nueva);
        }else{
            $noticia->image_id = null;
        }
        $noticia->save();
        return response()->json(['success' => 'Noticia publicada exitosamente'], 200);
        
    }
}
