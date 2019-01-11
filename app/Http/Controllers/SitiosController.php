<?php

namespace App\Http\Controllers;
use App\Sitio;
use View;
use DB;
use Illuminate\Http\Request;

class SitiosController extends Controller
{
    public function index(){
        $gob = Sitio::with('image')->where('tipo','gobierno')->get();
        $religiosos = Sitio::with('image')->where('tipo','religiosos')->get();
        $civiles = Sitio::with('image')->where('tipo','civil')->get();
        return View::make("app.toluca", compact('gob','religiosos','civiles'));
    }

    public function getSitios(Request $data){
        $filtro = $data['filtro'];
        if($filtro == 'todos'){
            return sitio::with('image')->orderBy('created_at', 'desc')->paginate(10);
        }
        elseif($filtro == 'civiles'){
            return Post::with('image')->where('tipo',$filtro)->orderBy('created_at', 'desc')->paginate(5);
        }
        elseif($filtro == 'gobierno'){
            return Post::with('image')->where('tipo',$filtro)->orderBy('created_at', 'desc')->paginate(5);
        }
        elseif($filtro == 'religiosos'){
            return Post::with('image')->where('tipo',$filtro)->orderBy('created_at', 'desc')->paginate(5);
        }
    }

    public function postSitio(Request $data){
        //$noticia = $data['noticia'];
        $validator = $data->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'tipo' => 'required'
        ]);
        $sitio = new Sitio();
        $sitio->nombre = $data['nombre'];
        $sitio->descripcion = $data['descripcion'];
        $sitio->tipo = $data['tipo'];
        $sitio->save();
        return response()->json(['success' => 'Sitio publicado exitosamente'], 200);
        
    }

    public function deleteSitio(Request $data){
        DB::table('sitios')
        ->where('id', $data['id'])
        ->delete();
    }
}
