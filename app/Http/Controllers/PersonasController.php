<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;
use App\Image;
use Validator;
use DB;
use View;
class PersonasController extends Controller
{   

    public function index(){
        $personas = Persona::with('image')->orderBy('created_at')->get();
        $cabildo = array();
        $temp = array();
        $cont = 1;
        foreach ($personas as $persona) {
            if($cont % 3 == 0){
                array_push($temp, $persona);
                array_push($cabildo, $temp);
                $temp = array();
            }else{
                array_push($temp, $persona);
            }
            $cont = $cont + 1; 
        }
        array_push($cabildo, $temp);
        return View::make("app.cabildo", compact('cabildo'));
    }
    public function getPersonas(Request $data){
        
        $filtro = $data['filtro'];
        if($filtro == 'todos'){
            return Persona::with('image')->orderBy('apellidos')->paginate(10);
        }
        else{
            return Persona::with('image')->where('nombre',$filtro)->orderBy('apellidos')->paginate(10);
        }
    }

    public function postPersona(Request $data){
        $validator = $data->validate([
            'nombre' => 'required',
            'apellidos' => 'required',
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
            $persona->image()->associate($nueva);
        }else{
            $persona->image_id = null;
        }
        if($data['twitter']){
            $persona->twitter = $data['twitter'];
        }else{
            $persona->twitter =null;
        }
        if($data['twitter']){
            $persona->facebook = $data['facebook'];
        }else{
            $persona->facebook =null;
        }
        $persona->save();
        return response()->json(['success' => 'Persona registrada exitosamente'], 200);
    }
}
