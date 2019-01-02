<?php

  

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Image;  

class ImageUploadController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function imageUpload()

    {

        return view('imageUpload');

    }

  

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function imageUploadPost()
    {
        request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        //$imageName = request()->image->getClientOriginalName().'.'.request()->image->getClientOriginalExtension();  
        request()->image->move(public_path('images'), $imageName);
        $image = new Image();
        $image->name = $imageName;
        $image->original_name = request()->image->getClientOriginalName();
        $image->save();  

        return back()

            ->with('success','You have successfully upload image.' )

            ->with('image',$imageName);

    }

    public function getImages(){
        return Image::all();
    }

}