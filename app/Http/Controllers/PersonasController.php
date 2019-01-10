<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;
use App\Image;
use Validator;
use DB;
class PersonasController extends Controller
{
    public function getPersonas(Request $data){
        
        $filtro = $data['filtro'];
        if($filtro == 'todos'){
            return Persona::with('image')->orderBy('nombre')->paginate(10);
        }
        else{
            return Persona::with('image')->where('nombre',$filtro)->orderBy('nombre')->paginate(10);
        }
    }

    public function postPersona(Request $data){
        $validator = $data->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'descripcion' => 'required',
            'desc_puesto' => 'required'
        ]);
        $persona = new Persona();
        $persona->nombre = $data['nombre'];
        $persona->apellidos = $data['apellidos'];
        $persona->descripcion = $data['descripcion'];
        $persona->desc_puesto = $data['desc_puesto'];
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
        if($data['twitter']){
            $persona->twitter = $data['twitter'];
        }else{
            $persona->twitter ='';
        }
        if($data['twitter']){
            $persona->facebook = $data['facebook'];
        }else{
            $persona->facebook ='';
        }
        $persona->save();
        return response()->json(['success' => 'Persona registrada exitosamente'], 200);
    }
}
