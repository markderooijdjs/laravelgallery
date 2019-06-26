<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlbumsController extends Controller
{
    //homepage for the app
    public function index(){
        return view('albums.index');
    }

    public function create(){
        return view('albums.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'cover_image' => 'image|max:1999',

        ]);

        // Original filename with ext eg jpb or png
        $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
        
        //Filename without ext
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

        //Gets just the extension
        $extension = $request->file('cover_image')->getClientOriginalExtension();

        //New filename
        $filenameToStore = $filename.'_'.time().'.'.$extension;

        //upload image
        $path = $request->file('cover_image')->storeAs('public/album_covers', $filenameToStore);

        return $path;
    } 
}
