<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\User;
use DB;
use View;
class UsersController extends Controller{

    public function admin()
    {
        $mensaje = '';
        return View::make("users/adminUsers",compact('mensaje'));
    }

    public function obtenerUsuarios(){
        return DB::table('users')
        ->join('role_user', 'users.id', '=', 'role_user.user_id')
        ->join('roles', 'role_user.role_id', '=', 'roles.id')
        ->orderByRaw('users.created_at DESC')
        ->select('users.id as id','name','role_user.role_id as role_id', 'email','roles.descripcion as rol')
        ->get();        
    }

    public function bajaUsuario(Request $data){
        $id = $data['id'];
        $user = User::find($id);
        $user->delete();    
        $respuesta = array();
        $string2 = "Baja de usuario exitosa";
        $string = '{"id":1,"contenido":'.'"'.$string2.'"'.'}';
        array_push($respuesta, json_decode($string));
        return response($respuesta, Response::HTTP_OK);
    }

    public function obtenerRoles(){
        return DB::table('roles')
        ->select('id','descripcion')
        ->get();
    }

    public function putUser(Request $data){
        $usuario = $data['usuario'];
        $id = $usuario['id'];
        $nombre = $usuario['name'];
        $email = $usuario['email'];
        $tipo = $usuario['role_id'];
        $respuesta = array();
        if($email != '' and $nombre != ''){
            try{
                $numero = DB::table('users')
                ->where('id', $id)
                ->update(['email' => $email]);
                DB::table('users')
                ->where('id', $id)
                ->update(['name' => $nombre]);
                DB::table('role_user')
                ->where('user_id', $id)
                ->update(['role_id'=>$tipo]);
                $string2 = "Actualizacion exitosa";
                $string = '{"id":4,"contenido":'.'"'.$string2.'"'.'}';
                array_push($respuesta, json_decode($string));
                return response($respuesta,Response::HTTP_OK);
            }
            catch(Illuminate\Database\QueryException $e){
                $errorCode = $e->errorInfo[1];
                if($errorCode == 1062){
                    $string2 = "El e-mail indicado ya esta en uso".$numero ;
                    $string = '{"id":1,"contenido":'.'"'.$string2.'"'.'}';
                    array_push($respuesta, json_decode($string));
                    return response($respuesta, 500);
                }
            }
        }else{
           if($email == ''){
                $string2 = "El E-MAIL no debe estar vacio";
                $string = '{"id":2,"contenido":'.'"'.$string2.'"'.'}';
                array_push($respuesta, json_decode($string));
           }
           if($nombre == ''){
                $string2 = "El NOMBRE no debe estar vacio";
                $string = '{"id":3,"contenido":'.'"'.$string2.'"'.'}';
                array_push($respuesta, json_decode($string));
           }
           return response($respuesta, 500);
        }
    }
}