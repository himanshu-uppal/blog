<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Font;
use Session;

class FontController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$this->authorize('view', new Font());
       $fonts = Font::orderBy('id','DESC')->paginate(10);
        //$fonts = Font::orderBy('id','DESC');
       // print_r($fonts);
        return view('admin.font.index')->withFonts($fonts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         //$this->authorize('create', Font::class);
           
        return view('admin.font.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$this->authorize('create', Font::class);
        
        $this->validate($request,[
            'name'=>'required|max:255|unique:fonts,name',
            'size'=>'required|numeric',
            ]);

        $font = new Font();
        $font->name=$request->name;
        $font->size=$request->size;
        $font->save();

        //Session::flash('key','value');
        Session::flash('success','The blog font was successfully saved !');

        //$fonts = Font::orderBy('id','DESC')->paginate(10);
         $fonts = Font::orderBy('id','DESC');
        return view('admin.font.index')->withFonts($fonts);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $font = Font::find($id);
      
      //  $this->authorize('update', $font);

        return view('admin.font.edit')->withFont($font);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $font = Font::find($id);

        if($request->name == $font->name){
             $this->validate($request,[
             'size'=>'required|numeric',
            ]);
        }
        else{
             $this->validate($request,[
            'name'=>'required|max:255|unique:fonts,name',
            'size'=>'required|numeric',
            ]);
        }
         //  $this->authorize('update', $font);
        if($request->name != $font->name){
            $font->name=$request->name;
        }
     
             
             $font->size=$request->size; 
    
             $font->save();

        //Session::flash('key','value');
        Session::flash('success','The blog font was successfully updated !');

        //$fonts = Font::orderBy('id','DESC')->paginate(10);
         $fonts = Font::orderBy('id','DESC');
        return view('admin.font.index')->withFonts($fonts);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $font = Font::find($id);
         //$this->authorize('delete', $font); 
        $font->delete();
        Session::flash('success','The blog font was successfully deleted !');
        
        //$fonts = Font::orderBy('id','DESC')->paginate(10);
         $fonts = Font::orderBy('id','DESC');
        return view('admin.font.index')->withFonts($fonts);
    }
}
