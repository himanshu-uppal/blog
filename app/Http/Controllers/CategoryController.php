<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Session;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $categories = Category::all();
       return view('admin.categories.index')->withCategories($categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.categories.create')->withCategories($categories);
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request,[
            'category'=>'required|max:255|unique:categories,category',
            'description'=>'required'
            ]);

        $category = new Category();
        $category->category=$request->category;
        $category->description=$request->description;
        $category->save();

        //Session::flash('key','value');
        Session::flash('success','The category was successfully added !');

        return redirect()->route('categories.show',$category->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::find($id);
        return view('admin.categories.show')->withCategory($category);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category= Category::find($id);
        return view('admin.categories.edit')->withCategory($category);
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
          $this->validate($request,[
            'category'=>'required|max:255|unique:categories,category',
            'description'=>'required'
            ]);

        $category = Category::find($id);
        $category->category=$request->category;
        $category->description=$request->description;
        $category->save();

        //Session::flash('key','value');
        Session::flash('success','The category was successfully added !');

        return redirect()->route('categories.show',$category->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id); 
        $category->delete();
        Session::flash('success','The category was successfully deleted !');
        return redirect()->route('categories.index');    
    }
}
