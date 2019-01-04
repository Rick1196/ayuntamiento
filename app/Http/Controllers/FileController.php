<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;
use View;
class FileController extends Controller
{
    public function create()
    {   
        $archivos = File::orderBy('created_at','asc')->get();
        return View::make("users/create", compact('archivos'));
        //return view('users/create');
    }

    public function store(Request $request)
    {

        $this->validate($request, [

                'file' => 'required',
                'file.*' => 'mimes:doc,pdf,docx,zip'

        ]);
        
        
        if(request()->hasfile('file'))
         {

            $name = time().'.'.request()->file->getClientOriginalExtension();
            $org_name=request()->file->getClientOriginalName();
            request()->file->move(public_path().'/files/', $name);  
            $file = new File();
            $file->filename=$name;
            $file->original_filename = $org_name;
            $file->save();
         
         }


        return back()->with('success', 'Your files has been successfully added');
    }
}
