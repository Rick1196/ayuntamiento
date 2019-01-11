<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\docs_pubs;
use View;
use App\File;
class docs extends Controller
{
    public function publicos(){
        $archivos = docs_pubs::with('file')->get();
        return View::make("app/docs_publicos", compact('archivos'));

    }
    public function store(Request $request)
    {

        $this->validate($request, [

                'archivo' => 'required',
                'archivo.*' => 'mimes:doc,pdf,docx,zip',
                'descripcion' => 'required'

        ]);
        
        
        if(request()->hasfile('archivo'))
         {

            $name = time().'.'.request()->archivo->getClientOriginalExtension();
            $org_name=request()->archivo->getClientOriginalName();
            request()->archivo->move(public_path().'/files/', $name);  
            $file = new File();
            $file->filename=$name;
            $file->original_filename = $org_name;
            $file->save();
            $doc = new docs_pubs();
            $doc->descripcion = request()->descripcion;
            $doc->file()->associate($file);
            $doc->save();
         
         }


        return back()->with('success', 'Su archivo ha sido agregado exitosamente');
    }

    public function create()
    {   //return docs_pubs::with('file')->get();
        $archivos = docs_pubs::with('file')->get();
        return View::make("users/docs_pub_form", compact('archivos'));
        //return view('users/create');
    }
}
